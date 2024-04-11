# Contributing to the Project

If you wish to contribute to this project, please be sure to read the [Code of Conduct](CODE_OF_CONDUCT.md).

## Working on a patch

We recommend you do each new feature or bugfix in a new branch.
This simplifies the task of code review as well as the task of merging your changes into the canonical repository.

A typical workflow will then consist of the following:

1. Create a new local branch based off the appropriate release branch.
2. Switch to your new local branch.
   (This step can be combined with the previous step with the use of `git switch -c {new branch} {original branch}`, or, if the original branch is the current one, `git switch -c {new branch}`.)
3. Do some work, commit, repeat as necessary.
4. Push the local branch to your remote repository.
5. Send a pull request.

The mechanics of this process are actually quite trivial. Below, we will
create a branch for fixing an issue in the tracker.

```console
$ git switch -c hotfix/9295
Switched to a new branch 'hotfix/9295'
```

... do some work ...


```console
$ git commit -s
```

> ### About the -s flag
>
> See the [section on commit signoffs](#commit-signoffs) below for more details on the `-s` option to `git commit` and why we require it.

... write your log message ...

```console
$ git push fork hotfix/9295:hotfix/9295
Counting objects: 38, done.
Delta compression using up to 2 threads.
Compression objects: 100% (18/18), done.
Writing objects: 100% (20/20), 8.19KiB, done.
Total 20 (delta 12), reused 0 (delta 0)
To ssh://git@github.com/{username}/send-sms-with-php-and-twilio.git
   b5583aa..4f51698  HEAD -> hotfix/9295
```

To send a pull request, you have several options.

If using GitHub, you can do the pull request from there.
Navigate to your repository, select the branch you just created, and then select the "Pull Request" button in the upper right.
Select the user/organization "settermjd" (or whatever the upstream organization is) as the recipient.

You can also perform the same steps via the [GitHub CLI tool](https://cli.github.com).
Execute `gh pr create`, and step through the dialog to create the pull request.
If the branch you submit against is not the default branch, use the `-B {branch}` option to specify the branch to create the patch against.

## Commit Signoffs

In order for us to accept your patches, you must provide a signoff in all commits; this is done by using the `-s` or `--signoff` option when calling `git commit`.
The signoff is used to certify that you have rights to submit your patch under the project's license, and that you agree to the [Developer Certificate of Origin](https://developercertificate.org).

### Automating signoffs

You can automate adding your signoff by using a commit template that includes the line:

```text
Signed-off-by: Your Name <your.email@example.com>
```

Put that line into a file, and then run the command:

```console
git config commit.template {path to file}
```

If you want to use this template everywhere, pass the `--global` option to `git config`.

### Adding signoffs when committing from the GitHub website

You can add a signoff manually when committing from the GitHub website by adding the line `Signed-off-by: Your Name <your.email@example.org>` by itself in the commit message.

### Adding signoffs after-the-fact

If you have forgotten to signoff your commits, you have two options.
For both, the first step is determining the number of commits you have made in your patch.
On Unix-like systems (Linux, BSD, OSX, WSL, etc.), this is generally accomplished via:

```console
git log --oneline {original branch}..HEAD | wc -l
```

From there, choose either to only signoff, or perform an interactive rebase:

- Signoff only: run `git rebase --signoff HEAD~{number you discovered}`
- Full interactive rebase: run `git rebase -i HEAD~{number you discovered} -x "git commit --amend --signoff --no-edit"`.
  This will present the standard interactive rebase screen, but include the line `exec git commit --amend --signoff --no-edit` between each commit.
  Leave those lines after each commit you will be keeping.

If you run into issues during a rebase operation, you can generally execute `git rebase --abort` to return to the original state.

When done, execute `git push -f`, specifying the correct remote and branch, in order to force-push your amendments.
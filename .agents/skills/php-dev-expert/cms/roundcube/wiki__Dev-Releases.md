# Dev Releases · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Dev-Releases

---

# Creating a new release

How do we release a new version of Roundcube? This document aims to provide an answer.

## 1. Creating a release branch

This is what we do usually before a major release (i.e. after beta and release candidate). We create a new branch from the master branch.

```
git checkout master
git checkout -b release-x.y
git push origin release-x.y
git config branch.release-x.y.merge refs/heads/release-x.y
git config branch.release-x.y.remote origin
```

## 2. Creating the package(s)

The steps to take are basically the same for major and minor releases. You have to have all changes in the release branch. Make sure CI status is green there. Then you take the `Makefile` file from the branch you want to do a release from, and execute:

```
make VERSION=x.y.z all
```

This will produce tarballs named `roundcubemail-x.y.z.tar.gz`, `roundcube-framework-x.y.z.tar.gz`, `roundcubemail-x.y.z-complete.tar.gz` which can be distributed.

## 3. Verifying the package(s)

There's many things that could go wrong in making the package tarballs, so we need to verify them. This is a manual process.

Hopefully the `make` command was successful and created the packages. First we take a look at the package contents. We look for missing or extra folders/files. We look at version numbers in a few places, we check if the file size makes sense. We check whether the css resources has been compiled, javascript files minified, etc.

Then we take the package, install and run it. We run the upgrade process too.

## 4. Signing the package(s)

The release tarballs are usually signed with GPG to provide a way for consumers to
verify their authenticity. The process is to create a detacted ascii-armored signature
of the .tar.gz files. The `Makefile` already has a target for this action:

```
make VERSION=x.y.z GPGKEY=41C4F7D5 sign
```

Also verify the signatures before publishing them:

```
make VERSION=x.y.z verify
```

## 5. Tagging the release in git

Tags are to be signed with a GPG key. This should be the developers/release
managers identity. So first, tell your git which identity to use for signing:

```
git config [--global] user.signingkey XXXXXXXX
```

Then create a signed tag (with the `-s` option):

```
git checkout release-x.y
git tag -s -a x.y.z -m "Tagging files for x.y.z"
git push --tags
```

## 6. Publishing the package(s)

Go to the [Releases](https://github.com/roundcube/roundcubemail/releases) page.
Click the button "Draft a new release" and then select the previously created
(signed) tag from the drop-down field.

Give a release title "Roundcube Webmail x.y.z" and write a short summary of the
release and append the Changelog since the last release of that series.

Then, upload the release tarballs along with the signature files.
For a beta and release candidate versions, check the "This is a pre-release" box.

Finally, publish the release with a click on the according button.

Make a Docker release by running [the update workflow](https://github.com/roundcube/roundcubemail-docker/actions/workflows/update-sh.yml) and merging the generated pull request.

## 7. Announcements

- Update downloads page on roundcube.net (<https://github.com/roundcube/roundcube.github.com/blob/master/_data/releases.json>)
- Create a new post on the roundcube.net news feed (<https://github.com/roundcube/roundcube.github.com/tree/master/_posts>)
- Post notification to announce@, dev@ and users@ mailing lists
- Post on social media

For the Downloads page SHA sums of the release files are required. You can get them with:

```
make VERSION=x.y.z shasum
```

## 8. Adapt milestones

Lastly, adapt the milestones of the repository:

1. Create one for the next version.
2. Move all open items from the milestone for the freshly released version to the newly created one.
3. Close the milestone for the released version.

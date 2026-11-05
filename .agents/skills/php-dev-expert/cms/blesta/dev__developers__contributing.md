# Contributing Code | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/contributing

---

Version: 6

On this page

We welcome contributions to Blesta's open source extension repositories on [GitHub](https://github.com/blesta) â modules, gateways, plugins, and messengers. Community fixes and features make the whole ecosystem better, and we'd love to merge yours.

To keep that possible, please understand the economics of a pull request: **review capacity is the bottleneck, not code.** Every line you submit must be read, understood, tested, and maintained by us â forever. A change that took 30 minutes to produce can take a full day to properly review and regression test. The guidelines below exist so that genuine contributions get reviewed and merged quickly, instead of sitting behind PRs that are too large or too risky to process.

## Before You Start[â](#before-you-start "Direct link to Before You Start")

For a small, obvious bug fix â a typo, an off-by-one, a broken API call â just open a pull request.

For anything larger, **talk to us before you write code**, so you don't spend effort on a change we can't merge:

- **Extension bug fixes and features:** open an issue on the extension's GitHub repository describing the problem or proposal, and wait for a maintainer to confirm it's wanted.
- **Bugs in Blesta itself:** follow [Reporting a Bug](dev__support__reporting-a-bug.md) â core bugs are tracked through the forums and our issue tracker, not extension repositories.
- **Feature ideas for Blesta itself:** post in the [feature requests site](https://requests.blesta.com/).

A confirmed issue also gives your pull request something to link to, which makes review faster.

## One Concern Per Pull Request[â](#one-concern-per-pull-request "Direct link to One Concern Per Pull Request")

This is our most important rule. **A pull request should do exactly one thing**: fix one bug, or add one feature.

A real example of what not to do: a single PR that fixes phone number formatting, adds EPP protocol extensions, changes DNSSEC behavior, renames a configuration mode, implements TLD pricing, and enables domain transfers. Even with tidy individual commits, a PR like that is reviewed, tested, merged, and â if something breaks â reverted **as a single unit**. One subtle bug in one of those six concerns holds all six hostage, and a revert throws away five good changes to remove one bad one.

If you have several fixes, open several pull requests. Sequential, focused PRs get merged; omnibus PRs get closed with a request to split them.

## Keep Changes Small and Focused[â](#keep-changes-small-and-focused "Direct link to Keep Changes Small and Focused")

Beyond one concern per PR, keep the diff as small as that concern allows:

- Change only the lines your fix or feature requires.
- Don't reformat, restyle, or refactor surrounding code in the same PR â even if it needs it. If you spot something worth cleaning up, open a separate issue or PR.
- Don't "improve" things you weren't asked to touch (error handling, variable names, whitespace) as a side effect. Every extra changed line is extra review time and extra regression risk.

There's no hard line limit, but as a rule of thumb: if your diff is large enough that you wouldn't want to carefully read every line of someone else's identical PR, it's too big.

## Describe Your Change[â](#describe-your-change "Direct link to Describe Your Change")

Your pull request description is the first thing we review, and an empty or vague one is usually where review ends. Include:

- **What** changed, in plain language.
- **Why** â the bug it fixes or the problem it solves, with a link to the related issue (e.g. "Fixes #12").
- **How you tested it** â see below. Include your Blesta version, PHP version, and whether you tested against a sandbox/test environment or a live account.
- **Risks** â anything that changes existing behavior, database schema, or configuration, and anything you were *not* able to test.
- **Screenshots** for any UI change.

## Test Before You Submit[â](#test-before-you-submit "Direct link to Test Before You Submit")

You are responsible for testing your own change before asking us to review it. That means:

- Running the code in a real Blesta installation, against the real service (or its sandbox) for modules and gateways.
- Exercising the actual code paths you changed â a syntax check (`php -l`) or "it looks right" is not testing.
- Thinking about edge cases and regressions: what else calls the code you touched? What happens with empty input, a failed API call, an existing service created before your change?

Tell us what you tested and how in the PR description. "Untested, but should work" is an automatic close.

## AI-Assisted Contributions[â](#ai-assisted-contributions "Direct link to AI-Assisted Contributions")

Using AI tools to help write code is fine â we use them too. But **you are the author of everything you submit**, however it was produced. That means:

- You have read and understood every line of the diff before opening the PR.
- You can explain any part of the change during review â what it does, and why you chose that approach.
- You personally tested it, as described above. The AI didn't test it, and neither did we â yet.

What we can't accept is generated code submitted unread and untested, because that quietly shifts the entire burden of review, understanding, and testing onto us. If review makes it clear the author can't explain their own change, the PR will be closed.

## What We May Close Without Detailed Review[â](#what-we-may-close-without-detailed-review "Direct link to What We May Close Without Detailed Review")

To protect review capacity, pull requests with any of the following may be closed with a short note pointing here rather than receiving a full review:

- Multiple unrelated fixes or features bundled into one PR.
- A large change with no prior discussion or linked issue.
- An empty, vague, or template-boilerplate description.
- No statement of how the change was tested.
- Unrelated reformatting, restyling, or refactoring mixed into the diff.
- Generated code the author is unable to explain or defend during review.
- No response to review feedback after a few weeks.

Being closed is not a judgment of the idea. If your PR is closed for scope, you're welcome â encouraged â to resubmit it as smaller, focused pull requests.

## Submission Checklist[â](#submission-checklist "Direct link to Submission Checklist")

Before opening a pull request, confirm:

- This PR addresses a single bug fix or feature.
- Non-trivial work was discussed in an issue first, and the issue is linked.
- I have read every line of the diff myself and can explain it.
- I tested this in a real Blesta installation and described how in the PR.
- The description covers what changed, why, testing, and risks.
- The diff contains no unrelated formatting or refactoring changes.
- The code matches the surrounding style (see the [Style Guide](dev__developers__style-guide.md)).
- I will respond to review feedback and update the PR as needed.

Thanks for contributing â a small, well-described, well-tested pull request is one of the most useful things anyone can send us.

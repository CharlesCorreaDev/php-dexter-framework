# Using Organizations in Craft Console | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/craft-console-organizations

---

Search Knowledge Base

# Using Organizations in Craft Console

![](https://craftcms.com/dist/images/icon-tip.svg)

Craft Console replaced Craft ID in December 2022. Any references you may find to Craft ID (in past official communication, documentation, or other community resources) refer to features that have been rolled into the new platform.

## Welcome to Craft Console [#](#welcome-to-craft-console "Direct link to Welcome to Craft Console")

This article covers features of our centralized license management tool, Craft Console. [Sign in](https://console.craftcms.com/login) to follow along!

If this will be your first time using Craft Console, get started by [creating an account](https://console.craftcms.com/register). Not sure if you have an account? [Request a password reset link](https://console.craftcms.com/forgot-password) with your email address.

![](https://craftcms.com/dist/images/icon-tip.svg)

We have a companion article intended for [clients and site owners](kb__craft-console-for-clients.md) that covers the critical path to creating an organization, setting up billing info, and inviting their first team member!

## Overview [#](#overview "Direct link to Overview")

There are two ways that you will interact with Craft Console: your personal account, and *organizations*.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Context Switcher]()

Switch between your individual account and organizations you are a member of with the context menu.

### Individual/Private Accounts [#](#individual-private-accounts "Direct link to Individual/Private Accounts")

When signing up for an account, use your own name and email address—even if you are doing so on behalf of your employer or a client. Accounts are intended to be personal and private. Any time you need to share access with a colleague, you will use an [organization](#organizations).

All [license management](#working-with-licenses) features are available to individual accounts.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Individual Profile]()

The individual account profile form. Add your full name and a profile image to distinguish yourself in the context menu, and in organizations’ member lists.

### Organizations [#](#organizations "Direct link to Organizations")

Organizations are *not* accounts, and therefore do not have a username or password to log in. Rather, organizations delegate access to *members* via their [personal](#individual-private-accounts) accounts.

The primary function of organizations is to formalize the process of purchasing licenses on behalf of clients—without the need to retroactively transfer ownership, or to share login credentials.

![](https://craftcms.com/dist/images/icon-tip.svg)

An organization is required to access some developer features, like submitting plugins to the plugin store.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Profile]()

The organization profile form. When you are a member of many organizations, a logo and highlight color can help you identify them quickly.

## Existing Users [#](#existing-users "Direct link to Existing Users")

If you or a client had an account prior to the launch of Craft Console (at the time, *Craft ID*), we encourage you to update it with the above in mind—many users signed up on behalf of their business, intending to share a single login with their team or a developer. This process is made more secure with organizations: each team member maintains their own account, and can be added to or removed from the organization by an owner.

Organizations cannot be members of other organizations, so in order to access a *client’s* organization, the client must directly invite anyone responsible for managing licenses on their behalf.

This is frequently the case for developers—if all your clients (or your employer’s clients) have their own organizations, you may want to maintain a single shared account for *your* team, rather than having a client invite your individual team members. Alternatively, designate someone on your team as the primary invitee, then have that person delegate access to anyone else who needs it. (This method requires that your point-person is added with the [admin](#roles) role!)

Regardless of how you choose to structure accounts on your side of the equation, it’s never too late to get your client set up with an organization, or to [transfer](#transferring-licenses) any licenses you hold on their behalf.

### Plugin Developers [#](#plugin-developers "Direct link to Plugin Developers")

When Craft Console launched, any developer accounts with a plugin available in the [Plugin Store](https://plugins.craftcms.com) automatically had those plugins migrated to a new organization, inheriting the name on their personal account. That personal account remains unchanged—but you may find it clearer to update either the new organization or your existing account to reflect the structure of your business.

## Creating an Organization [#](#creating-an-organization "Direct link to Creating an Organization")

Once you have a personal account, you can create an organization from the **context menu** in the upper-left corner, or by visiting the **Organizations** tab in the main menu.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Empty Organizations List]()

A fresh account without access to any organizations.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: New Organization]()

Creating a new organization.

A name and slug are required to create an organization. Adding a URL, logo, and color can help identify organizations you are a member of—especially in the context menu!

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Dashboard]()

A new organization, without any licenses.

## Inviting Members to an Organization [#](#inviting-members-to-an-organization "Direct link to Inviting Members to an Organization")

As the creator of an an organization, you are also the *de facto* **Owner**. This special role gives you complete control over the organization and its members—including the ability to add other owners. You can also invite members with the **Admin** or **Member** roles, which have narrower permissions.

![](https://craftcms.com/dist/images/icon-tip.svg)

Before inviting a new member, ask them what email they would like to use! They may already have a Craft Console account, and invites cannot be accepted by an account under a different email.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Invite Member]()

Inviting an **Admin** to an organization. An email will be sent to the address(es) provided.

### Roles [#](#roles "Direct link to Roles")

It’s important to choose an appropriate role for new organization members.

#### Member

All members get a limited set of capabilities:

- Manage Craft & plugin licenses;
- Purchase or [request approval](#order-approval) for Craft and plugin licenses;
- View order history;
- View plugin sales data;

#### Admin

In addition to the base member capabilities, admin can:

- Make purchases on behalf of the organization;
- Manage members (including adding other **Admin**);

#### Owner

Organization **Owners** have full control over the organization and its members, including adding and removing other owners.

Owners are also responsible for managing [payment methods](#managing-payment-information) for the organization, and are sent all billing communications (unless you’ve explicitly set a [billing email recipient](#billing-recipients)).

![](https://craftcms.com/dist/images/icon-warning.svg)

Take care when inviting other owners to your organization, as they will have the same set of capabilities as you. This means that they (or a bad actor who gains access to their account) could remove *you* as an owner, and take exclusive control over the organization.

### Joining an Organization [#](#joining-an-organization "Direct link to Joining an Organization")

All invites generate an email. If the invitee’s email matches an existing Craft Console account, the user will be able to sign in and accept the invite; if there is no account on file, they will create a password and be automatically added to the organization.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Invite Email]()

An email is sent to the invitee, whether or not they have a Craft Console account.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Invite for New User]()

New users accept an invitation to join an organization by creating an account.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Invite for Existing User]()

Existing users can view pending invitations by logging in and visiting the **Organizations** tab.

## Managing Payment Information [#](#managing-payment-information "Direct link to Managing Payment Information")

You can add **Payment Methods** to your personal account, or directly on an organization you are an owner of. Personal accounts and organizations do not share payment methods.

Only an owner of an organization can update its **Billing** settings, and choose whether orders made by members [require approval](#order-approval).

![](https://craftcms.com/dist/images/icon-warning.svg)

[An update](https://craftcms.com/blog/craft-console-updates-for-organizations) to Craft Console in June 2023 revised this behavior, so your account’s actual behavior may be different.

If no changes have been made to your organization’s billing settings since that update, the payment method associated with any auto-renewing licenses owned by the organization remains the same. **You will only see a change to license renewals if you add a new payment method directly to the organization.**

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Billing Info]()

An organization’s **Billing** settings (including its designated **Primary** method) and order approval policy.

### Billing Recipients [#](#billing-recipients "Direct link to Billing Recipients")

You can have order receipts and plugin sale emails sent to one or more specific addresses by populating the **Billing email** field with a comma-separated list. Other communications, like [Cloud](https://craftcms.com/cloud) invoices, renewal reminders and issues, order approvals, and anything else that is only actionable with Console access, are *always* sent to all organization owners to ensure deliverability.

## Working with Licenses [#](#working-with-licenses "Direct link to Working with Licenses")

Craft and plugin licenses can be purchased and owned directly by individual accounts, or by an organization. Licenses can also be [transferred](#transferring-licenses) between accounts and organizations, or from one organization to another.

### Making a Purchase [#](#making-a-purchase "Direct link to Making a Purchase")

You can make purchases from the Plugin Store via the control panel of an existing Craft installation, or directly from [plugins.craftcms.com](https://plugins.craftcms.com).

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: In-App Plugin Store Cart Preview]()

The cart as it appears when accessed via the Craft CMS control panel. Click **Checkout** to continue to Craft Console.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Choose Cart]()

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: View Cart]()

Back on Craft Console, you will be asked to choose which cart you want to use.

When using your personal cart, you will be able to check out immediately.

Organization-specific carts may require you to [request approval](#order-approval) for an order before it is completed.

### Order Approval [#](#order-approval "Direct link to Order Approval")

Owner and admin members can make purchases via their organization cart without approval. [Members](#roles)’ capabilities, on the other hand, are governed by the **Require order approval** setting in the [**Billing** settings](#managing-payment-information) of an organization.

When this option is **on**, organization members must submit the order for approval.

![](https://craftcms.com/dist/images/icon-tip.svg)

Juggling licenses for multiple clients? You can switch between active carts (including your personal cart) from the bottom of any cart screen.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Plugin Store Approval Request Submission]()

Checking out as a member of an organization may only allow submitting the order for approval.

Organization owners are notified of the request via email, and they alone are allowed to approve it. Your payment method (if one was selected at the time a request is submitted) is not charged (authorized *or* captured) until the order is approved.

When placing an order via an organization, only payment methods configured for that organization will be available for selection. Owners may add a new payment method at checkout.

A payment method is not selected when requesting approval for an order, and members may request approval whether or not a payment method has been added to the organization. The owner must add a payment method before approving the order.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Orders Overview]()

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Organization Order Pending Approval]()

Pending orders appear at the top of the organization owner’s **Orders** screen.

![](https://craftcms.com/dist/images/icon-tip.svg)

If an organization’s payment method requires 3D Secure, only the owner will be able to complete a purchase.

### Transferring Licenses [#](#transferring-licenses "Direct link to Transferring Licenses")

Licenses can be transferred between accounts, or in and out of organizations. Transfers always begin from a License’s **Danger Zone**:

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: License Transfer Danger Zone]()

From here, you can **Release** a license (so it can be [claimed](kb__releasing-and-claiming-licenses.md) by another account or organization), or **Transfer** it directly to an organization you are a member of.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console: Transfer License Target]()

Transferring a license from a personal account to an organization. When transferring a CMS license that has plugin licenses attached to it, you will be prompted to transfer them at the same time.

Licenses held by a personal account can only be *transferred* to an organization, but licenses held by an organization can be transferred to a member or to another organization that the current user is a member of.

A license must be *released* in order for another personal account to *claim* it. These processes are discussed elsewhere in the Knowledge Base:

- [Releasing and Claiming Licenses](kb__releasing-and-claiming-licenses.md)
- [More Information than You Require About Craft License Keys](kb__more-information-than-you-require-about-craft-license-keys.md)
- [How Craft License Enforcement Works](kb__how-craft-license-enforcement-works.md)
- [Transferring a Craft License to a new Domain](kb__transferring-a-craft-license-to-a-new-domain.md)
- [Transferring a Craft License to a new Server](kb__transferring-a-craft-license-to-a-new-server.md)
- [Finding your Craft License Keys](kb__finding-your-craft-license-keys.md)

![](https://craftcms.com/dist/images/icon-tip.svg)

Need to transfer licenses in bulk? Reach out to [support](https://craftcms.com/support-services).

Applies to
Craft CMS 4, Craft CMS 3, Craft CMS 2, Craft Commerce 4, Craft Commerce 3, Craft Commerce 2, and Craft Commerce 1.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

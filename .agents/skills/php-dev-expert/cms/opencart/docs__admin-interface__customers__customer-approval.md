# Customer Approval | OpenCart

> **Fonte / Source:** https://docs.opencart.com/admin-interface/customers/customer-approval

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__admin-interface__customers__customer-approval.md).

**Controlled Customer Registration** 🔒 The Customer Approval system allows you to manually review and approve new customer registrations before they can access your store, perfect for B2B portals, exclusive memberships, and high-security environments.

## Introduction

Customer Approval in OpenCart 4 provides a controlled registration process where new customer accounts require manual approval by an administrator. This feature is essential for stores that need to vet customers before granting access, such as B2B portals, exclusive memberships, or high-security environments.

## How Customer Approval Works

The approval process follows a structured workflow:

1

**Step 1: Customer Registration**

Customer completes the registration form on your storefront.

**Outcome:** Registration is submitted to the system.

2

**Step 2: Approval Check**

System checks if the customer's selected group requires approval.

**Possible paths:**

- **No approval required** → Account activated immediately
- **Approval required** → Account placed in pending approval queue

3

**Step 3: Admin Review (If Required)**

Administrator reviews the pending registration in the admin panel.

**Review includes:**

- Customer information
- Custom field data (if applicable)
- Any additional registration details

4

**Step 4: Decision & Notification**

Administrator makes a decision:

**Approve:**

- Account activated
- Customer receives approval notification email
- Customer can now log in and shop

**Deny:**

- Registration rejected
- Customer receives rejection notification email
- Registration data removed from system

## Accessing Customer Approval

To access the Customer Approval interface:

1. Log in to your OpenCart admin panel
2. Navigate to **Customers → Customer Approval**
3. You'll see the approval list with pending requests

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252F7YIZLSoiOxq8R4v6Di2S%252Fapproval-list.png%3Falt%3Dmedia%26token%3D7c074f8d-7ea5-43b0-817c-085f756b602b&width=768&dpr=3&quality=100&sign=676de9143f5c79b925f29489afe3094c&sv=3)

Customer Approval List

## Approval Types

OpenCart 4 supports two types of approval:

Type

Description

Typical Use

**Customer** 👤

Standard customer registrations

Regular store customers, B2B portals

**Affiliate** 🤝

Affiliate program registrations

Referral partners, affiliate marketers

**Type Selection Tip** 💡

Choose **Customer** approval for regular store registrations and **Affiliate** approval for partner program applications. Each type has separate approval queues and settings.

## Configuring Approval Requirements

Approval requirements are configured at the **customer group** level:

1

**Step 1: Access Customer Groups**

Navigate to **Customers → Customer Groups**

**Group Management** 👥

Customer groups control which registrations require approval. Different groups can have different approval settings.

2

**Step 2: Edit Group Settings**

Click **Edit** on the customer group you want to configure

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252F2miRN6Jwts5blpPAMucm%252Fedit-group.png%3Falt%3Dmedia%26token%3Db572e0cd-98c4-4a14-97c3-7730b109f9ff&width=768&dpr=3&quality=100&sign=9d2b48c5950bcea087bb85947153ddbb&sv=3)

Edit Customer Group

3

**Step 3: Set Approval Required**

In the group form, find **Approval Required** and select:

- **Yes** - Manual approval required
- **No** - Automatic approval (default)

**Approval Required Setting** ⚠️

- **Yes**: Each registration requires manual review (B2B portals, exclusive memberships)
- **No**: Automatic approval upon registration (standard retail stores)

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252FwnO6ECvPT0mdIYvOe7QC%252Fapproval-setting.png%3Falt%3Dmedia%26token%3D3a250e23-9833-45d9-a5ac-4985717a09c3&width=768&dpr=3&quality=100&sign=aaf25a9cb2d144d006d622b67a781ab3&sv=3)

Approval Required Setting

4

**Step 4: Save Changes**

Click **Save** to update the group settings

**Settings Applied** ✅

Approval requirements are now configured. New registrations in this group will follow the specified approval workflow.

## Reviewing Pending Approvals

**Customer Approval List 📋**

The approval list displays all pending requests with the following information:

- **Name** - Customer/affiliate name
- **Email** - Contact email
- **Customer Group** - Requested group
- **Type** - Customer or Affiliate
- **Date Added** - Registration date

**List Navigation Tips** 🔍

- Use pagination to navigate through large lists
- Refresh the page to see new pending requests

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252F7YIZLSoiOxq8R4v6Di2S%252Fapproval-list.png%3Falt%3Dmedia%26token%3D7c074f8d-7ea5-43b0-817c-085f756b602b&width=768&dpr=3&quality=100&sign=676de9143f5c79b925f29489afe3094c&sv=3)

Approval List Interface

**Filtering Approval Requests 🔎**

Use the filter options to narrow down the list:

Filter

Description

**Name** 👤

Search by customer name

**Email** 📧

Search by email address

**Customer Group** 🏷️

Filter by requested group

**Type** 📝

Customer or Affiliate

**Date Added** 📅

Filter by registration date range

**Filtering Best Practices** 🎯

- Combine multiple filters for precise searches
- Save frequent filter combinations as bookmarks
- Clear filters regularly to see all pending requests

## Approving or Denying Requests

1

**Step 1: Make Decision**

Based on your review, choose one of these actions:

**Approve Request** ✅

- Click **Approve** to activate the account
- Customer receives approval notification email
- Account becomes immediately active

**Deny Request** ❌

- Click **Deny** to reject the registration
- Customer receives rejection notification email
- Registration is removed from the system

**Decision Considerations** ⚖️

- **Approve**: When registration meets all requirements and seems legitimate
- **Deny**: When information is incomplete, suspicious, or doesn't meet criteria
- **Follow-up**: Consider requesting additional information if needed

2

**Step 2: Confirm Action**

Confirm your decision. The system will process the request and send appropriate notifications.

**Action Completed** 🎉

The approval decision has been processed. Check the approval list to verify the request has been removed from pending queue.

## Bulk Approval Operations

**Batch Processing 🔄**

To process multiple requests at once:

1. **Select requests** - Check boxes next to the requests you want to process
2. **Choose action** - From the bulk action dropdown:

   - **Approve Selected** ✅ - Approve all selected requests
   - **Deny Selected** ❌ - Deny all selected requests

**Bulk Operation Warning** ⚠️

Bulk operations apply to **all selected requests**. Double-check your selections before proceeding, as actions cannot be undone.

**Efficiency Tip** ⚡

Use filters to narrow down requests before bulk operations. For example, filter by customer group to approve all wholesale applications at once.

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252FXOr8BPQm6k6NMd1JtSoD%252Fbulk-interface.png%3Falt%3Dmedia%26token%3D47ea6369-d0a1-47ae-a073-5ecb593023f5&width=768&dpr=3&quality=100&sign=891263f1b979b67322b010844f646833&sv=3)

Bulk Approval Interface

## Email Notifications

OpenCart 4 sends automatic email notifications for approval actions:

**Approval Email (Sent to Customer) ✅**

- **Subject:** "Your account has been approved!"
- **Content:** Welcome message and login instructions
- **Includes:** Store contact information, login URL, support details

**Approval Email Tips** 📧

- Customize email content in **System → Settings → Mail**
- Include store branding for professional appearance
- Test email delivery to ensure customers receive notifications

**Denial Email (Sent to Customer) ❌**

- **Subject:** "Your account registration"
- **Content:** Notification of rejection
- **Optional:** Include reason for denial (configurable)

**Denial Email Considerations** ⚠️

- Be professional and courteous in denial messages
- Consider offering alternative options when appropriate
- Comply with privacy regulations when explaining denials

**Admin Notifications (Optional) 👨‍💼**

Configure email alerts to notify administrators of new pending requests.

- **Setup:** Configure in **System → Settings → Mail**
- **Frequency:** Real-time or daily digest options
- **Recipients:** Multiple admin emails can be specified

**Notification Management** 🔔

Use admin notifications to ensure timely review of pending requests, especially for time-sensitive applications.

## Approval Workflow Best Practices

**Registration & Communication** 📝

1. **Clear Requirements**: Specify approval requirements on registration page
2. **Process Explanation**: Explain the approval process to potential customers
3. **Realistic Expectations**: Set realistic expectations for approval time
4. **Consistent Communication**: Maintain regular communication with applicants

**Efficient Review Process** ⚡

1. **Review Criteria**: Establish criteria for different customer groups
2. **Staff Designation**: Designate specific staff for approval tasks
3. **Response Time SLAs**: Set service level agreements for response time
4. **Daily Monitoring**: Check pending requests daily

**Documentation & Improvement** 📊

1. **Decision Documentation**: Keep notes on approval decisions
2. **Denial Reasons**: Provide clear reasons for denials when appropriate
3. **Follow-up**: Follow up on incomplete applications
4. **Criteria Review**: Regularly review and update approval criteria

## Integration with Customer Groups

**Group-Specific Approval 🏷️**

Different customer groups can have different approval requirements:

Group Type

Approval Setting

Use Case

**Retail Customers** 🛍️

No approval

Standard public store

**Wholesale Customers** 🏢

Approval required

B2B customers with special pricing

**VIP Members** 🥇

Approval required

Exclusive membership program

**Affiliates** 🤝

Approval required

Controlled affiliate network

**Group Strategy** 🎯

Configure approval requirements based on customer group risk and value. High-value groups (wholesale, VIP) often require approval, while retail customers can be auto-approved.

**Custom Fields in Approval Process 📝**

Custom fields assigned to customer groups appear in the approval review, providing additional information for decision-making.

- **Business Information**: Company details, VAT numbers, industry classification
- **Compliance Data**: Age verification, tax exemption status
- **Preferences**: Communication preferences, product interests

**Enhanced Decision-Making** 💡

Use custom field data to make informed approval decisions. For example, require business registration documents for wholesale accounts.

## Troubleshooting

### Common Issues

**Approval emails not sending 📧**

**Possible Causes:**

- Email configuration incorrect
- SMTP server issues
- Email templates missing or misconfigured

**Solutions:**

1. Check email configuration in **System → Settings → Mail**
2. Test email functionality with test messages
3. Verify email templates exist and are properly formatted

**Requests not appearing in list 🔍**

**Possible Causes:**

- Customer group not set to require approval
- Registration not completed successfully
- Filter settings hiding requests

**Solutions:**

1. Verify customer group has "Approval Required" set to Yes
2. Check customer registration logs
3. Clear all filters to see all pending requests

**Cannot approve/deny requests ❌**

**Possible Causes:**

- Insufficient admin permissions
- System errors or conflicts
- Request already processed

**Solutions:**

1. Check admin permissions for customer approval module
2. Review system error logs
3. Refresh the approval list page

**Bulk operations failing 🔄**

**Possible Causes:**

- Mixed request types selected
- System timeout or resource limits
- Permission issues

**Solutions:**

1. Ensure all selected requests are of the same type (Customer or Affiliate)
2. Process smaller batches to avoid timeouts
3. Verify bulk operation permissions

**Performance Tips** ⚡

- **Batch Processing**: Process approvals in batches at scheduled times
- **Smart Filtering**: Use filters to focus on specific customer groups
- **Automation**: Consider automated approval for low-risk groups
- **Cleanup**: Regularly clean up old denied requests to maintain performance

## Security Considerations

### Fraud Prevention 🕵️‍♂️

- Review IP addresses and geographic information
- Check for duplicate or suspicious email patterns
- Verify business information for B2B applications

### Data Privacy 🔒

- Handle customer information securely during review
- Comply with GDPR and other privacy regulations
- Securely dispose of denied application data

**Documentation Summary** 📋

You've now learned how to:

- Configure and manage customer approval workflows in OpenCart 4
- Review and process pending approval requests
- Set up email notifications for approval decisions
- Integrate approval with customer groups and custom fields
- Apply best practices for efficient and secure approval processes

**Next Steps:**

- Customer Groups - Configure which groups require approval
- Customer Management - Manage approved customer accounts
- Custom Fields - Add custom information to approval reviews
- GDPR Management - Ensure approval process complies with data privacy regulations

[PreviousCustomer Groups](docs__admin-interface__customers__customer-groups.md)[NextCustom Fields](docs__admin-interface__customers__custom-fields.md)

Last updated 10 months ago

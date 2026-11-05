# Mail | OpenCart

> **Fonte / Source:** https://docs.opencart.com/admin-interface/marketing/mail

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__admin-interface__marketing__mail.md).

**Reach Your Audience** The Mail feature allows you to send mass emails to different customer segments, affiliates, and newsletter subscribers directly from your OpenCart 4 admin panel.

## Introduction

The Mail feature in OpenCart 4 enables you to send targeted email campaigns to various segments of your audience. This powerful tool is ideal for marketing campaigns, announcements, promotions, and customer communication. With flexible recipient options and an integrated WYSIWYG editor, you can create professional emails without leaving your admin dashboard.

## Accessing the Mail Interface

To access the Mail feature:

1. Log in to your OpenCart admin panel
2. Navigate to **Marketing → Mail**
3. You'll see the email composition interface with all available options

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252FOqKzIe37ZZbzwwidizO6%252Fmail-interface.png%3Falt%3Dmedia%26token%3D5ea127f6-2042-4034-a399-ad2924151f1d&width=768&dpr=3&quality=100&sign=fcd573bb54959b64bcf6118befee32f1&sv=3)

Mail Interface

## Sending a Mass Email

1

**Step 1: Configure Sender Settings**

Select the **From** store that will appear as the sender of the email:

- **Default**: Uses your main store configuration
- **Specific Store**: Select from your multi-store setup (if enabled)

This determines which store's email address and name will be used as the sender.

2

**Step 2: Select Recipients**

Choose who will receive your email from the **To** dropdown:

Recipient Type

Description

Use Case

**All Newsletter Subscribers**

Customers who have subscribed to your newsletter

Newsletter campaigns, general announcements

**All Customers**

Every customer in your database

Store-wide announcements, policy changes

**Customer Group**

Customers belonging to a specific group

Targeted promotions (e.g., wholesale customers)

**Customers**

Individual customers selected manually

VIP communications, specific customer follow-ups

**All Affiliates**

Every affiliate in your system

Affiliate program updates, commission announcements

**Affiliates**

Individual affiliates selected manually

Specific affiliate communications

**Products**

Customers who have purchased specific products

Product-specific promotions, update notifications

When selecting **Customer Group**, choose the specific group from the dropdown that appears.

When selecting **Customers**, **Affiliates**, or **Products**, use the autocomplete field to search and add specific recipients.

3

**Step 3: Compose Your Email**

Fill in the email composition form:

**Subject** (Required)

- Enter a clear, descriptive subject line
- Keep it concise but informative
- Avoid spam trigger words

**Message** (Required)

- Use the WYSIWYG editor (CKEditor) to format your email
- Supports HTML formatting, images, links, and styling
- Create engaging content with proper formatting

4

**Step 4: Send the Email**

Click the **Send** button to start the mailing process:

- Emails are sent in batches of 10 recipients at a time
- You'll see progress updates as emails are sent
- A success message confirms completion
- If interrupted, you can resume from where it left off

## Recipient Options Details

**All Newsletter Subscribers**

- **Target**: Customers who have opted in to receive newsletters
- **Best for**: Regular newsletter campaigns, general store updates
- **Considerations**: Ensure compliance with anti-spam regulations

**All Customers**

- **Target**: Every customer in your database with an email address
- **Best for**: Important store-wide announcements
- **Considerations**: Use sparingly to avoid overwhelming customers

**Customer Group**

- **Target**: Customers belonging to a specific customer group
- **Best for**: Targeted promotions (retail vs wholesale, geographic segments)
- **Configuration**: Select the desired group from the dropdown
- **Integration**: Works with your existing customer group structure

**Individual Customers**

- **Target**: Specific customers selected via autocomplete
- **Best for**: Personalized communications, VIP treatment
- **Selection**: Type customer name to search and add
- **Management**: Added customers appear in a list that can be edited

**All Affiliates**

- **Target**: Every affiliate in your affiliate program
- **Best for**: Affiliate program updates, commission changes
- **Considerations**: Keep affiliates informed about program changes

**Individual Affiliates**

- **Target**: Specific affiliates selected via autocomplete
- **Best for**: Direct communication with top performers
- **Selection**: Type affiliate name to search and add

**Product-Based Targeting**

- **Target**: Customers who have purchased specific products
- **Best for**: Product updates, accessory promotions, follow-up offers
- **Selection**: Type product name to search and add
- **Logic**: Only customers who have ordered the selected products will receive the email

## Email Configuration

**Sender Configuration**

The **From** setting determines which store's identity is used:

- **Email Address**: Taken from the store's configuration (System → Settings → Store tab)
- **Sender Name**: Uses the store name from the selected store
- **Multi-store Support**: Each store can have different sender information

**Email Content**

- **WYSIWYG Editor**: Full-featured CKEditor for HTML email creation
- **HTML Support**: Create richly formatted emails with images and links
- **Plain Text Fallback**: System generates plain text version automatically
- **Character Encoding**: UTF-8 support for international characters

**Sending Process**

- **Batch Size**: 10 emails per batch to prevent server overload
- **Progress Tracking**: Real-time updates during sending
- **Resume Capability**: Can resume if process is interrupted
- **Error Handling**: Invalid emails are skipped, valid ones continue

## System Requirements

**Email System Configuration**

Before using the Mail feature, ensure your email system is properly configured in **System → Settings → Server tab**:

Setting

Description

Recommended Value

**Mail Engine**

Method for sending emails

`mail` (PHP mail()) or `smtp`

**SMTP Hostname**

SMTP server address

Your email provider's SMTP server

**SMTP Username**

SMTP authentication username

Your email address

**SMTP Password**

SMTP authentication password

Your email password

**SMTP Port**

SMTP server port

587 (TLS) or 465 (SSL)

**SMTP Timeout**

Connection timeout in seconds

30

**Note**: For reliable mass email delivery, consider using SMTP with a professional email service.

**Server Requirements**

- **PHP mail() Function**: Must be enabled and configured on your server
- **SMTP Support**: Required if using SMTP mail engine
- **Execution Time**: Sufficient PHP execution time for large batches
- **Memory Limit**: Adequate PHP memory for processing emails

## Use Cases for Mass Emails

**1. Newsletter Campaigns 📰**

Send regular newsletters to subscribers:

- Monthly product updates
- Seasonal promotions
- Company news and announcements
- Educational content related to your products

**2. Product Promotions 🛍️**

Target customers based on purchase history:

- Cross-sell accessories for purchased products
- Notify about product restocks
- Announce new versions or updates
- Special offers on related products

**3. Customer Segmentation 🎯**

Send different messages to different customer groups:

- VIP discounts for loyal customers
- Wholesale pricing announcements for business customers
- Geographic-specific promotions
- New customer welcome series

**4. Affiliate Communication 🤝**

Keep your affiliate network informed:

- New affiliate program features
- Commission structure updates
- Marketing material announcements
- Performance reports and tips

**5. System Notifications 🔔**

Important store announcements:

- Policy changes (shipping, returns, privacy)
- Holiday schedules
- System maintenance notices
- Security updates

## Best Practices

**Email Strategy** 📧

1. **Segment Your Audience**: Use customer groups and purchase history for targeted messaging
2. **Clear Subject Lines**: Be descriptive but concise to improve open rates
3. **Mobile-Friendly Design**: Ensure emails look good on mobile devices
4. **Call to Action**: Include clear next steps for recipients
5. **Test Before Sending**: Send test emails to yourself first

**Compliance & Delivery** ⚠️

1. **Permission-Based**: Only email customers who have opted in (especially for newsletters)
2. **Unsubscribe Option**: Include unsubscribe instructions in every email
3. **Anti-Spam Laws**: Comply with regulations like CAN-SPAM, GDPR, CASL
4. **Sender Reputation**: Maintain good email practices to avoid being marked as spam
5. **List Hygiene**: Regularly clean inactive or bouncing email addresses

**Technical Considerations** ⚡

1. **Batch Size**: The system sends 10 emails at a time - be patient with large lists
2. **SMTP Recommended**: For reliable delivery, use SMTP instead of PHP mail()
3. **Email Templates**: Consider creating reusable templates for common communications
4. **Testing**: Always test with a small group before sending to everyone
5. **Timing**: Schedule sends for optimal open times (varies by audience)

## Troubleshooting

### Common Issues

**Emails not sending 🚫**

**Solution:** Check your email configuration in System → Settings → Server tab:

1. Verify Mail Engine is set correctly
2. Check SMTP credentials if using SMTP
3. Test with a single recipient first
4. Check server error logs for mail function errors

**Emails going to spam 📭**

**Solution:** Improve email deliverability:

1. Use a recognizable "From" name and address
2. Avoid spam trigger words in subject and content
3. Include unsubscribe instructions
4. Ensure your server's IP isn't on blacklists
5. Consider using a dedicated email service

**Slow sending process 🐢**

**Solution:** The system sends 10 emails per batch for server stability:

1. Be patient with large recipient lists
2. Check server performance and resources
3. Consider sending during off-peak hours
4. Break large campaigns into smaller segments

**Missing recipient options 🔍**

**Solution:** Some options require data to be available:

1. **Customer Groups**: Ensure you have created customer groups first
2. **Products**: Products must have been purchased by customers
3. **Newsletter Subscribers**: Customers must have opted in to newsletters
4. **Affiliates**: Affiliate program must be enabled and have affiliates

**Formatting issues in emails 🎨**

**Solution:** Check your HTML email formatting:

1. Use the WYSIWYG editor's formatting tools
2. Test in multiple email clients
3. Keep designs simple and responsive
4. Avoid complex CSS that may not render consistently

**Performance Considerations** ⚡

- Large recipient lists will take time to process (10 emails per batch)
- Server resources affect sending speed
- Consider using cron jobs for very large campaigns (requires customization)
- Monitor server load during mass email sends

**Documentation Summary** 📋

You've now learned how to:

- Access and use the Mail feature in OpenCart 4
- Select different recipient types for targeted campaigns
- Compose professional emails using the WYSIWYG editor
- Configure email settings for optimal delivery
- Apply best practices for effective email marketing
- Troubleshoot common email sending issues

**Next Steps:**

- Marketing Overview - Explore other marketing features
- Affiliate Management - Set up and manage your affiliate program
- Coupon Management - Create and distribute discount coupons
- Customer Groups - Organize customers for better targeting
- System Settings - Configure email and other system settings

[PreviousCoupons](docs__admin-interface__marketing__coupons.md)[NextSystem](docs__admin-interface__system.md)

Last updated 10 months ago

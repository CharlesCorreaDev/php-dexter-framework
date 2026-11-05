# Sendmail and DKIM | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/sendmail-and-dkim

---

Search Knowledge Base

# Sendmail and DKIM

![](https://craftcms.com/dist/images/icon-warning.svg)

Sendmail is notoriously unreliable—we strongly recommend using a third-party [transactional mail service](https://craftcms.com/docs/5.x/system/mail.html#transport-adapters), whenever possible.

Projects or hosts for which the only mail transport option is the built-in `sendmail` adapter can still provide [DKIM protection](https://www.cloudflare.com/learning/dns/dns-records/dns-dkim-record) for automated emails.

Craft’s [mailer component](https://craftcms.com/docs/5.x/system/mail.html) can be configured to sign *all* outgoing messages using a private key. Once you’ve [generated a key pair](https://easydmarc.com/tools/dkim-record-generator) and added the required DNS records, save the private key to your development environment, outside the web root (i.e. in the [`storage/` directory](https://craftcms.com/docs/5.x/system/directory-structure.html#storage)), and *do not commit it to a git repository*.

## Configuration [#](#configuration "Direct link to Configuration")

In `config/app.php`, add the following:

```
use Craft;
use craft\helpers\App;
use yii\symfonymailer\DkimMessageSigner;
use Symfony\Component\Mime\Crypto\DkimSigner;

return [
    'components' => [
        'mailer' => function() {
            // Load the base mailer config:
            $config = App::mailerConfig();

            // Create a signer and add to the config map:
            $signer = new DkimSigner(
                'file://' . Craft::getAlias('@storage/private-dkim.key'),
                'sub.mydomain.com',
                'selector-name'
            );
            $config['signer'] = new DkimMessageSigner($signer);

            // Return the instantiated component:
            return Craft::createObject($config);
        },
    ],
];
```

`sub.mydomain.com` should be the sending domain, *without* the “selector” or `_domainkey` prefixes. `selector-name` should agree with the prefix chosen when creating the key and DNS record.

Outbound messages are automatically signed, when the mailer sees the `signer` configuration present. If there is a problem loading your key file, an error will be thrown.

You can verify that the DKIM header is added to emails using DDEV’s Mailpit component, which runs alongside your other containers!

```
Return-Path: <me@domain.com>
Received: from localhost (localhost [127.0.0.1])
        by my-project (Mailpit) with SMTP
        for <user@domain.com>; Thu, 30 Jan 2025 14:20:21 -0800 (PST)
To: user@domain.com
Subject: This is a test email from Craft
From: My Craft Project <me@domain.com>
MIME-Version: 1.0
Date: Thu, 30 Jan 2025 14:20:21 -0800
Message-ID: <58b7d8104bd2a2eb4cfb2213f0ca0b7e@domain.com>
DKIM-Signature: v=1; q=dns/txt; a=rsa-sha256;
 bh=O+M5ROO/rz3sH4RGCpfbvrQXjESEWlfnfUbnIcHiD5s=; d=domain.com; h=To:
 Subject: From: MIME-Version: Date: Message-ID; i=@domain.com; s=s1;
 t=1738275621; c=relaxed/relaxed;
 b=c07VmLWi+PtCxIXVmfOpOhZCJx0BuBgVWHyk0ebWCV6lqywxgNvpJP7+p65y9tfM7KOfcI+BW
 S6VNkDf2OfAYy4WBClGqbBUMLp9ciqVdfqcBMq+7JPIeIdz5RhEldYWrnISWS9eh765Yyeh/D
 cq2fDpzrBqi6oZRCs8B3PNFvI=
Content-Type: multipart/alternative; boundary=Axz7Ni6l
```

In earlier versions of Craft, the `Mailer` component expects an instance of `Symfony\Component\Mime\Crypto\DkimSigner`, directly (the `MessageSignerInterface` wrapper didn’t exist yet):

```
use Craft;
use craft\helpers\App;
use Symfony\Component\Mime\Crypto\DkimSigner;

return [
    'components' => [
        'mailer' => function() {
            $config = App::mailerConfig();

            // Immediately instantiate the component:
            $mailer = Craft::createObject($config);

            // Create the signer...
            $signer = new DkimSigner(
                'file://' . Craft::getAlias('@storage/private-dkim.key'),
                'sub.mydomain.com',
                'selector-name'
            );

            // ...then attach and return it:
            return $mailer->withSigner($signer);
        },
    ],
];
```

Applies to
Craft CMS 5 and Craft CMS 4.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

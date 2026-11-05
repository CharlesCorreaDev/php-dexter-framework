# SSL | Configuration | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/ssl/

---

# Set up SSL[¶](#set-up-ssl "Permanent link")

## Let’s Encrypt[¶](#lets-encrypt "Permanent link")

[Let's Encrypt](https://letsencrypt.org/) is a Certificate Authority (CA) that provides free, automated, and open security certificates. It enables website owners to get security certificates within minutes, and leads to a safer web experience for everyone.

### Apply for SSL[¶](#apply-for-ssl "Permanent link")

Note

You may want to get your valid domain and server set up before applying for your certificate.

1. Visit [certbot](https://certbot.eff.org/) (a Let's Encrypt client). Choose `None of the above` for **Software** and choose your OS for **System**. We will use `CentOS/RHEL 7` as an example.
2. Certbot will bring up some instructions specific to your OS. For CentOS7 we will run the following commands:

   ```
   yum install certbot
   certbot certonly
   ```
3. Enter your email, domain and valid web root, e.g. `/usr/local/lsws/DEFAULT/html/`.
4. If your application is a success, you should see `Congratulations!`
5. Verify your certificate files exist: `ll /etc/letsencrypt/YOUR_DOMAIN/`
6. You should see the following files:
   - `cert.pem`
   - `chain.pem`
   - `fullchain.pem`
   - `privkey.pem`

### Set up SSL on LSWS[¶](#set-up-ssl-on-lsws "Permanent link")

Navigate to LiteSpeed Web Server **Web Admin > Configuration > Listeners > SSL**

There are two methods you can choose from: with fullchain, and without.

#### With fullchain[¶](#with-fullchain "Permanent link")

[![](../images/ssl01.png)](https://docs.litespeedtech.com/lsws/images/ssl01.png)

- **Private Key File**: `/etc/letsencrypt/live/Your_Domain/privkey.pem`
- **Certificate File**: `/etc/letsencrypt/live/Your_Domain/fullchain.pem`
- **Chained Certificate**: `Yes`
- **CA Certificate Path**:
- **CA Certificate File**:

#### Without fullchain[¶](#without-fullchain "Permanent link")

[![](../images/ssl02.png)](https://docs.litespeedtech.com/lsws/images/ssl02.png)

- **Private Key File**: `/etc/letsencrypt/live/Your_Domain/privkey.pem`
- **Certificate File**: `/etc/letsencrypt/live/Your_Domain/cert.pem`
- **Chained Certificate**: `No`
- **CA Certificate Path**:
- **CA Certificate File**: `/etc/letsencrypt/live/Your_Domain/chain.pem`

## Self-Signed[¶](#self-signed "Permanent link")

Self-signed certificates can be used to secure some web pages, like the web administration console, However, it is not recommended for a public web site, like an eCommerce web site. When you use a self-signed certificate, the browser will ask the user whether to accept the certificate or not as self-signed certificates are not trusted by the browser. You should follow the following step to create a self signed certificate.

### Create a 443 Lister[¶](#create-a-443-lister "Permanent link")

[![](../images/ssl06.png)](https://docs.litespeedtech.com/lsws/images/ssl06.png)

Create a listener with **Secure** set to `Yes`. The official **Port** for SSL is 443, but another port can be used instead.

### Generate a Private Key[¶](#generate-a-private-key "Permanent link")

[OpenSSL tool kit](http://www.openssl.org/) is required to generate a private key.

1. Install OpenSSL if it is not installed already.
2. Create an RSA private key for your web server by using this command:

   ```
   openssl genrsa -out server.key 2048
   ```

The `2048` in the above command is the length of the private key in bits. Bigger private keys are more secure. For more information about creating SSL private key please see the [OpenSSL documentation](https://wiki.openssl.org/index.php/Command_Line_Utilities#Generating_an_RSA_Private_Key).

Note

LiteSpeed web server only supports private key files without encryption.

In theory, this is not as safe as using encryption. But in reality, it is impossible to let a user input a password for the SSL keys when the server starts or restarts. Some web servers can save the password somehow and automate the pass-phase when the server starts, but it is only as good as long as the machine is not compromised, unless your password is hardware protected.

The private key file along with the certificate file should be placed in a directory that is only readable by the user whom the server is running as. If you generated the encrypted key file, the pass-phase can be removed with the following command:

```
openssl rsa -in server.skey -out server.key
```

### Create a Self-signed Certificate[¶](#create-a-self-signed-certificate "Permanent link")

Create a one year self-signed certificate with the following command:

```
openssl req -new -x509 -key server.key -out server.crt -days 365
```

You will be asked for more information about your organization and web site. Please give the correct information. You should give valid domain names of your web site when you are asked for **Common Name**, and not any aliases.

To determine the valid domain name, you can use commands such as nslookup, dig or host.

Example

If the web site can be accessed via both `http://foo.bar` and `http://www.foo.bar`, usually `foo.bar` is the valid domain name (canonical name), and `www.foo.bar` is an alias. In this case, `foo.bar` should be used for the **Common Name**.

### Set up the SSL Certificate[¶](#set-up-the-ssl-certificate "Permanent link")

Click on the newly created listener, and go to the **SSL** settings tab. Set the self-signed **Private Key File** and **Certificate File** to the location of the key file.

[![](../images/ssl07.png)](https://docs.litespeedtech.com/lsws/images/ssl07.png)

## Verify SSL is Working[¶](#verify-ssl-is-working "Permanent link")

### Online SSL Testing Tool[¶](#online-ssl-testing-tool "Permanent link")

Use [ssllabs](https://www.ssllabs.com/ssltest/)'s testing tool.

[![](../images/ssl03.png)](https://docs.litespeedtech.com/lsws/images/ssl03.png)

### Simple Browser Check[¶](#simple-browser-check "Permanent link")

[![](../images/ssl04.png)](https://docs.litespeedtech.com/lsws/images/ssl04.png)

The exact mechanism depends on your browser, but you should be able to click an icon next to the URL to get site information, including connection security.

[![](../images/ssl05.png)](https://docs.litespeedtech.com/lsws/images/ssl05.png)

You can usually also click on the padlock or similar icon to get more information about the connection.

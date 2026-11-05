# Using LiteSpeed Web Server as a Load Balancer | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/load-balancer/

---

# How to Set up LSWS as a Load Balancer[¶](#how-to-set-up-lsws-as-a-load-balancer "Permanent link")

This example uses three servers:

- `back1.litespeedtech.com` with IP `192.0.2.151`
- `back2.litespeedtech.com` with IP `192.0.2.152`
- `load.litespeedtech.com` with IP `192.0.2.153`

`back1` and `back2` will act as two backend nodes, and `load` will act as a load balancer.

## Verify the 3 Servers are Working[¶](#verify-the-3-servers-are-working "Permanent link")

Visit each backend node and the load balancer one by one in your browser:

[![](../images/load-balancer01.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer01.jpg)

[![](../images/load-balancer02.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer02.jpg)

[![](../images/load-balancer03.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer03.jpg)

As seen in the screenshots, the three servers are deliberately set to display different content to distinguish them from each other.

## Create External Apps[¶](#create-external-apps "Permanent link")

Create a new external app in the load balancer server's WebAdmin Console. This is can be done either at the server level or the vhost level.

[![](../images/load-balancer04.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer04.jpg) In this example, we are using a vhost that we've named "load balancer." Navigate to **Virtual Host > Load-balancer > External App** and click **Add**.

[![](../images/load-balancer05.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer05.jpg) Choose **Type** `Web Server` and click **Next**.

[![](../images/load-balancer06.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer06.jpg)

Set **Name** to `back1` and **Address** to `192.0.2.151`.

Since this example has two backend nodes, repeat the previous step to create another external app with **Type** `Web Server`, **Name** `back2`, and **Address** `192.0.2.152`.

[![](../images/load-balancer07.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer07.jpg)

Now create another external app, and set **Type** to `Load Balancer`. Click **Next**.

[![](../images/load-balancer08.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer08.jpg) Set **Name** to `load-balancer`, and **Workers** to `proxy::back1,proxy::back2` (these names were created in the previous steps).

[![](../images/load-balancer09.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer09.jpg)There should now be three external apps named `load-balancer`, `back2`, and `back1`.

## Create a Context[¶](#create-a-context "Permanent link")

[![](../images/load-balancer10.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer10.jpg)Create a new context with **Type** `Load Balancer`.

[![](../images/load-balancer11.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer11.jpg)

For this example, we want a full-site proxy, so set **URI** to `/`. Set the **Load Balancer** to the one we just created at the vhost level: `load-balancer`.

[![](../images/load-balancer12.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer12.jpg)

Since the three servers are using three different domains, add the `load.litespeedtech.com` domain to each of the back-end nodes' listeners.

Graceful restart all three LSWS instances.

## Verify The Load Balancer[¶](#verify-the-load-balancer "Permanent link")

Access the load balancer server (`load.litespeedtech.com`) to verify everything is working as expected.

[![](../images/load-balancer13.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer13.jpg)

[![](../images/load-balancer14.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/load-balancer14.jpg) You should see that it balances the load between `back1` and `back2`.

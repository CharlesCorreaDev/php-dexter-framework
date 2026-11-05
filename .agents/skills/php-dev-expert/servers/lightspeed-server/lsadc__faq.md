# Frequently Asked Questions | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/faq/

---

# Frequently Asked Questions[¶](#frequently-asked-questions "Permanent link")

## Is this a solution which can work with a control panel?[¶](#is-this-a-solution-which-can-work-with-a-control-panel "Permanent link")

cPanel users may try [ZeroConf](lsadc__zeroconf.md).

## Is IP fail-over setup available on ADC?[¶](#is-ip-fail-over-setup-available-on-adc "Permanent link")

Yes, it is. Please see [High Availability](lsadc__settings.md#high-availability) for configuration instructions.

## Does Web ADC support IPs on different interfaces?[¶](#does-web-adc-support-ips-on-different-interfaces "Permanent link")

There should not be any problem with multiple Network Interface Cards (NICs), as long as Keepalived allows it.

## Does Web ADC handle data synchronization across backend nodes?[¶](#does-web-adc-handle-data-synchronization-across-backend-nodes "Permanent link")

No. Data synchronization across backend nodes is not a responsibility of the ADC. Web ADC is responsible only for its own internal states. For backend nodes, you will need shared storage for files, and DB replication for databases. If DB High Availability is not required, you can set up multiple web nodes that talk to one DB server.

## Is Web ADC able to load balance MySQL?[¶](#is-web-adc-able-to-load-balance-mysql "Permanent link")

No. Web ADC is a layer 7 load balancer. Layer 4 is used for MySQL, therefore Web ADC can not route traffic at a per-query level and it cannot split read/write.

## Where should cache rules be defined: Web ADC, or the underlying web server(s)?[¶](#where-should-cache-rules-be-defined-web-adc-or-the-underlying-web-servers "Permanent link")

LSCache is available to use at the ADC level, however for most basic setups, we suggest enabling LSCache at the backend server level instead. If you do choose to enable LSCache at the ADC level, you must be careful not to introduce any inconsistencies with the backend.

## Does Web ADC support mod\_security rules?[¶](#does-web-adc-support-mod_security-rules "Permanent link")

Yes. The ModSec engine in LiteSpeed Web ADC is similar to the one in our LiteSpeed Web Server.

## Does WebADC support loading a subdirectory on a site from a separate source?[¶](#does-webadc-support-loading-a-subdirectory-on-a-site-from-a-separate-source "Permanent link")

Yes. You must define a context for the subdirectory, and then assign it to a different cluster.

Example

`example.com` load balances across five servers.

`example.com/blog` loads from a separate IP. Host headers will need to be preserved as the IP only responds to requests for `example.com`.

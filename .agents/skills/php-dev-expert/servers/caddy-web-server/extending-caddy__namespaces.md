# Module Namespaces — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/extending-caddy/namespaces

---

# Module Namespaces

Caddy guest modules are loaded generically as `interface{}` or `any` types. In order for the host modules to be able to use them, the loaded guest modules are usually type-asserted to a known type first. This page describes the mapping from module namespaces to Go types for all the standard modules.

Documentation for non-standard module namespaces can be found with the documentation for the host module that defines them.

| Namespace | Expected Interface Type | Description | Notes |
| --- | --- | --- | --- |
|  | [`caddy.App`](https://pkg.go.dev/github.com/caddyserver/caddy/v2#App) | Caddy app |  |
| admin.api | [`caddy.AdminRouter`](https://pkg.go.dev/github.com/caddyserver/caddy/v2#AdminRouter)  [`caddy.AdminHandler`](https://pkg.go.dev/github.com/caddyserver/caddy/v2#AdminHandler) | Registers HTTP routes for admin  HTTP handler middleware |  |
| caddy.config\_loaders | [`caddy.ConfigLoader`](https://pkg.go.dev/github.com/caddyserver/caddy/v2#ConfigLoader) | Loads a config | *⚠️ Experimental* |
| caddy.fs | [`fs.FS`](https://pkg.go.dev/io/fs#FS) | Virtual file system | *⚠️ Experimental* |
| caddy.listeners | [`caddy.ListenerWrapper`](https://pkg.go.dev/github.com/caddyserver/caddy/v2#ListenerWrapper) | Wrap network listeners |  |
| caddy.logging.encoders | [`zapcore.Encoder`](https://pkg.go.dev/go.uber.org/zap/zapcore#Encoder) | Log entry encoder |  |
| caddy.logging.encoders.filter | [`logging.LogFieldFilter`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/logging#LogFieldFilter) | Log field filter |  |
| caddy.logging.writers | [`caddy.WriterOpener`](https://pkg.go.dev/github.com/caddyserver/caddy/v2#WriterOpener) | Log writers |  |
| caddy.storage | [`caddy.StorageConverter`](https://pkg.go.dev/github.com/caddyserver/caddy/v2#StorageConverter) | Storage backends |  |
| dns.providers | [`certmagic.DNSProvider`](https://pkg.go.dev/github.com/caddyserver/certmagic#DNSProvider) | DNS challenge solver |  |
| events.handlers | [`caddyevents.Handler`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyevents#Handler) | Event handlers | *⚠️ Experimental* |
| http.authentication.hashes | [`caddyauth.Comparer`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/caddyauth#Comparer)  [`caddyauth.Hasher`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/caddyauth#Hasher) | Password comparers  Password hashers |  |
| http.authentication.providers | [`caddyauth.Authenticator`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/caddyauth#Authenticator) | HTTP authentication providers |  |
| http.encoders | [`encode.Encoding`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/encode#Encoding)  [`encode.Encoder`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/encode#Encoder) | Creates an encoder (compression)  Encodes a data stream |  |
| http.handlers | [`caddyhttp.MiddlewareHandler`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp#MiddlewareHandler) | HTTP handlers |  |
| http.ip\_sources | [`caddyhttp.IPRangeSource`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp#IPRangeSource) | IP ranges for trusted proxies |  |
| http.matchers | [`caddyhttp.RequestMatcher`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp#RequestMatcher)  [`caddyhttp.RequestMatcherWithError`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp#RequestMatcherWithError)  [`caddyhttp.CELLibraryProducer`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp#CELLibraryProducer) | Request matcher (use WithError instead)  Request matcher with error short-circuit  Support for CEL expressions | *⚠️ Deprecated*    *(Optional)* |
| http.precompressed | [`encode.Precompressed`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/encode#Precompressed) | Supported precompress mappings |  |
| http.reverse\_proxy.circuit\_breakers | [`reverseproxy.CircuitBreaker`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/reverseproxy#CircuitBreaker) | Reverse proxy circuit breakers |  |
| http.reverse\_proxy.selection\_policies | [`reverseproxy.Selector`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/reverseproxy#Selector) | Load balancing selection policies |  |
| http.reverse\_proxy.transport | [`http.RoundTripper`](https://pkg.go.dev/net/http#RoundTripper) | HTTP reverse proxy transports |  |
| http.reverse\_proxy.upstreams | [`reverseproxy.UpstreamSource`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddyhttp/reverseproxy#UpstreamSource) | Dynamic upstream source | *⚠️ Experimental* |
| tls.ca\_pool.source | [`caddytls.CA`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#CA) | Source of trusted root certs |  |
| tls.certificates | [`caddytls.CertificateLoader`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#CertificateLoader) | TLS certificate source |  |
| tls.client\_auth | [`caddytls.ClientCertificateVerifier`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#ClientCertificateVerifier) | Verifies client certificates |  |
| tls.ech.publishers | [`caddytls.ECHPublisher`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#ECHPublisher) | Publishes Encrypted ClientHello (ECH) configurations | *⚠️ Experimental* |
| tls.get\_certificate | [`certmagic.Manager`](https://pkg.go.dev/github.com/caddyserver/certmagic#Manager) | TLS certificate manager | *⚠️ Experimental* |
| tls.handshake\_match | [`caddytls.ConnectionMatcher`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#ConnectionMatcher) | TLS connection matcher |  |
| tls.issuance | [`certmagic.Issuer`](https://pkg.go.dev/github.com/caddyserver/certmagic#Issuer) | TLS certificate issuer |  |
| tls.leaf\_cert\_loader | [`caddytls.LeafCertificateLoader`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#LeafCertificateLoader) | Loads trusted leaf certs |  |
| tls.permission | [`caddytls.OnDemandPermission`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#OnDemandPermission) | Whether to obtain a cert for a domain | *⚠️ Experimental* |
| tls.stek | [`caddytls.STEKProvider`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#STEKProvider) | TLS session ticket key source |  |
| tls.context | [`caddytls.HandshakeContext`](https://pkg.go.dev/github.com/caddyserver/caddy/v2/modules/caddytls#HandshakeContext) | Intercept GetCertificate context | *⚠️ Experimental* |

Namespaces marked as "Experimental" are subject to change. (Please develop with them so we can finalize their interfaces!)

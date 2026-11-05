# Caching: Caching Overview | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/caching-overview

---

0

# Caching [¶](#caching)

Caching is a cheap and effective way to improve the performance of a Web application. By storing relatively
static data in cache and serving it from cache when requested, the application saves the time that would be
required to generate the data from scratch every time.

Caching can occur at different levels and places in a Web application. On the server-side, at the lower level,
cache may be used to store basic data, such as a list of most recent article information fetched from database;
and at the higher level, cache may be used to store fragments or whole of Web pages, such as the rendering result
of the most recent articles. On the client-side, HTTP caching may be used to keep most recently visited page content in
the browser cache.

Yii supports all these caching mechanisms:

- [Data caching](guide_22_0__caching-data.md)
- [Fragment caching](guide_22_0__caching-fragment.md)
- [Page caching](guide_22_0__caching-page.md)
- [HTTP caching](guide_22_0__caching-http.md)

[Security: Best Practices](guide_22_0__security-best-practices.md)

[Go to Top](#top)

[Data Caching](guide_22_0__caching-data.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/caching-overview.md) !

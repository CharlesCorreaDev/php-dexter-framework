# Module ngx_stream_geoip_module

> **Fonte / Source:** https://nginx.org/en/docs/stream/ngx_stream_geoip_module.html

---

## Module ngx\_stream\_geoip\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [geoip\_country](#geoip_country)      [geoip\_city](#geoip_city)      [geoip\_org](#geoip_org) |

The `ngx_stream_geoip_module` module (1.11.3) creates variables
with values depending on the client IP address, using the precompiled
[MaxMind](https://www.maxmind.com) databases.
Since 1.31.7, the module supports databases in MaxMind DB (MMDB) format.

This module is not built by default, it should be enabled with the
[`--with-stream_geoip_module`](configure.md#stream_geoip)
configuration parameter.

> This module requires the
> [libmaxminddb](https://github.com/maxmind/libmaxminddb)
> library for databases in MMDB format (1.31.7) or
> [GeoIP Legacy C](https://github.com/maxmind/geoip-api-c) library
> for databases in DAT format.

When using DAT databases with IPv6 support,
IPv4 addresses are looked up as IPv4-mapped IPv6 addresses.
When using MMDB databases,
IPv4-mapped IPv6 addresses are looked up as IPv4 addresses.

#### Example Configuration

> ```
> stream {
>     geoip_country         GeoLite2-Country.mmdb;
>     geoip_city            GeoLite2-City.mmdb;
>
>     map $geoip_city_continent_code $nearest_server {
>         default        example.com;
>         EU          eu.example.com;
>         NA          na.example.com;
>         AS          as.example.com;
>     }
>    ...
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `geoip_country file;` |
| Default: | — |
| Context: | `stream` |

Specifies a database used to determine the country
depending on the client IP address.
The following variables are available when using this database:

`$geoip_country_code`
:   two-letter country code, for example,
    “`RU`”, “`US`”.

`$geoip_country_code3`
:   three-letter country code, for example,
    “`RUS`”, “`USA`”.

`$geoip_country_name`
:   country name, for example,
    “`Russian Federation`”, “`United States`”.

|  |  |
| --- | --- |
| Syntax: | `geoip_city file;` |
| Default: | — |
| Context: | `stream` |

Specifies a database used to determine the country, region, and city
depending on the client IP address.
The following variables are available when using this database:

`$geoip_area_code`
:   telephone area code (US only).
    > This variable may contain outdated information since
    > the corresponding database field is deprecated.

`$geoip_city_continent_code`
:   two-letter continent code, for example,
    “`EU`”, “`NA`”.

`$geoip_city_country_code`
:   two-letter country code, for example,
    “`RU`”, “`US`”.

`$geoip_city_country_code3`
:   three-letter country code, for example,
    “`RUS`”, “`USA`”.

`$geoip_city_country_name`
:   country name, for example,
    “`Russian Federation`”, “`United States`”.

`$geoip_dma_code`
:   DMA region code in US (also known as “metro code”), according to the
    [geotargeting](https://developers.google.com/adwords/api/docs/appendix/cities-DMAregions)
    in Google AdWords API.
    > This variable may contain outdated information since
    > the corresponding database field is deprecated.

`$geoip_latitude`
:   latitude.

`$geoip_longitude`
:   longitude.

`$geoip_region`
:   country region code (region, territory, state, province, federal land
    and the like).

`$geoip_region_name`
:   country region name (region, territory, state, province, federal land
    and the like), for example,
    “`Moscow City`”, “`District of Columbia`”.

`$geoip_city`
:   city name, for example,
    “`Moscow`”, “`Washington`”.

`$geoip_postal_code`
:   postal code.

|  |  |
| --- | --- |
| Syntax: | `geoip_org file;` |
| Default: | — |
| Context: | `stream` |

Specifies a database used to determine the organization
depending on the client IP address.
The following variable is available when using this database:

`$geoip_org`
:   organization name, for example, “The University of Melbourne”.

# /docs/2.4/pt-br/developer/mod_example_1.c

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/developer/mod_example_1.c

---

/\*
\* mod\_example\_1.c: Example module for Apache HTTP Server 2.4
\* A simple "Hello, world!" handler.
\*/
#include "httpd.h"
#include "http\_config.h"
#include "http\_protocol.h"
#include "ap\_config.h"
static int example\_handler(request\_rec \*r)
{
/\* First off, we need to check if this is a call for the "example-handler" handler.
\* If it is, we accept it and do our things, if not, we simply return DECLINED,
\* and the server will try somewhere else.
\*/
if (!r->handler || strcmp(r->handler, "example-handler")) return (DECLINED);
/\* Now that we are handling this request, we'll write out "Hello, world!" to the client.
\* To do so, we must first set the appropriate content type, followed by our output.
\*/
ap\_set\_content\_type(r, "text/html");
ap\_rprintf(r, "Hello, world!");
/\* Lastly, we must tell the server that we took care of this request and everything went fine.
\* We do so by simply returning the value OK to the server.
\*/
return OK;
}
static void register\_hooks(apr\_pool\_t \*pool)
{
/\* Create a hook in the request handler, so we get called when a request arrives \*/
ap\_hook\_handler(example\_handler, NULL, NULL, APR\_HOOK\_LAST);
}
AP\_DECLARE\_MODULE(example) =
{
STANDARD20\_MODULE\_STUFF,
NULL,
NULL,
NULL,
NULL,
NULL,
register\_hooks /\* Our hook registering function \*/
};

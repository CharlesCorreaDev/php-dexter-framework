# /docs/2.4/pt-br/developer/mod_example_2.c

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/developer/mod_example_2.c

---

/\*
\* mod\_example\_2.c: Example module for Apache HTTP Server 2.4
\* This module calculates and displays MD5 or SHA1 digests of files.
\*/
#include "httpd.h"
#include "http\_config.h"
#include "http\_protocol.h"
#include "ap\_config.h"
#include "apr\_md5.h"
#include "apr\_sha1.h"
#include "apr\_file\_io.h"
#include "apr\_tables.h"
static int example\_handler(request\_rec \*r)
{
int rc, exists;
apr\_finfo\_t finfo;
apr\_file\_t \*file;
char \*filename;
char buffer[256];
apr\_size\_t readBytes;
int n;
apr\_table\_t \*GET;
apr\_array\_header\_t \*POST;
const char \*digestType;
/\* Check that the "example-handler" handler is being called. \*/
if (!r->handler || strcmp(r->handler, "example-handler")) return (DECLINED);
/\* Figure out which file is being requested by removing the .sum from it \*/
filename = apr\_pstrdup(r->pool, r->filename);
filename[strlen(filename)-4] = 0; /\* Cut off the last 4 characters. \*/
/\* Figure out if the file we request a sum on exists and isn't a directory \*/
rc = apr\_stat(&finfo, filename, APR\_FINFO\_MIN, r->pool);
if (rc == APR\_SUCCESS) {
exists =
(
(finfo.filetype != APR\_NOFILE)
&& !(finfo.filetype & APR\_DIR)
);
if (!exists) return HTTP\_NOT\_FOUND; /\* Return a 404 if not found. \*/
}
/\* If apr\_stat failed, we're probably not allowed to check this file. \*/
else return HTTP\_FORBIDDEN;
/\* Parse the GET and, optionally, the POST data sent to us \*/
ap\_args\_to\_table(r, &GET);
ap\_parse\_form\_data(r, NULL, &POST, -1, 8192);
/\* Set the appropriate content type \*/
ap\_set\_content\_type(r, "text/html");
/\* Print a title and some general information \*/
ap\_rprintf(r, "

## Information on %s:

", filename);
ap\_rprintf(r, "**Size:** %" APR\_OFF\_T\_FMT " bytes  
", finfo.size);
/\* Get the digest type the client wants to see \*/
digestType = apr\_table\_get(GET, "digest");
if (!digestType) digestType = "MD5";
rc = apr\_file\_open(&file, filename, APR\_READ, APR\_OS\_DEFAULT, r->pool);
if (rc == APR\_SUCCESS) {
/\* Are we trying to calculate the MD5 or the SHA1 digest? \*/
if (!strcasecmp(digestType, "md5")) {
/\* Calculate the MD5 sum of the file \*/
union {
char chr[16];
uint32\_t num[4];
} digest;
apr\_md5\_ctx\_t md5;
apr\_md5\_init(&md5);
readBytes = 256;
while ( apr\_file\_read(file, buffer, &readBytes) == APR\_SUCCESS ) {
apr\_md5\_update(&md5, buffer, readBytes);
}
apr\_md5\_final(digest.chr, &md5);
/\* Print out the MD5 digest \*/
ap\_rputs("**MD5:** `", r);
for (n = 0; n < APR_MD5_DIGESTSIZE/4; n++) {
ap_rprintf(r, "%08x", digest.num[n]);
}
ap_rputs("`", r);
/\* Print a link to the SHA1 version \*/
ap\_rputs("  
[View the SHA1 hash instead](developer__mod_example_2.c.md)", r);
}
else {
/\* Calculate the SHA1 sum of the file \*/
union {
char chr[20];
uint32\_t num[5];
} digest;
apr\_sha1\_ctx\_t sha1;
apr\_sha1\_init(&sha1);
readBytes = 256;
while ( apr\_file\_read(file, buffer, &readBytes) == APR\_SUCCESS ) {
apr\_sha1\_update(&sha1, buffer, readBytes);
}
apr\_sha1\_final(digest.chr, &sha1);
/\* Print out the SHA1 digest \*/
ap\_rputs("**SHA1:** `", r);
for (n = 0; n < APR_SHA1_DIGESTSIZE/4; n++) {
ap_rprintf(r, "%08x", digest.num[n]);
}
ap_rputs("`", r);
/\* Print a link to the MD5 version \*/
ap\_rputs("  
[View the MD5 hash instead](developer__mod_example_2.c.md)", r);
}
apr\_file\_close(file);
}
/\* Let the server know that we responded to this request. \*/
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

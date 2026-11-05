# JSP / CFM | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/jsp/

---

# JavaServer Pages / ColdFusion Markup[¶](#javaserver-pages-coldfusion-markup "Permanent link")

LiteSpeed Web Server supports servlet engines, JSP, and CFM through the AJPv13 protocol.

Info

- Apache Tomcat is a popular Java Servlet Container used to serve JavaServer Pages (.jsp).
- ColdFusion (.cfm) is a programming language based on Tomcat Servlet Engine.

To set up LSWS to work with a servlet engine to serve JSP or CFM files, you will need to create a servlet engine external app in the LSWS configuration. Then you can configure a script handler for `.jsp` and `.cfm` file extensions.

The steps are as follows:

1. Install an AJPv13-compatible servlet engine.
2. Make the web application files available to LSWS, if the servlet engine runs on a different machine.
3. If the web application is packed in a `.war` file, expand it.
4. Define the servlet engine in the WebAdmin Console.
5. Create a Java Web App context at the virtual-host level.
6. Set up a script handler for `.jsp`/`.cfm` files.

### Install servlet engine[¶](#install-servlet-engine "Permanent link")

You can use any servlet engine as long as it is AJPv13 compatible. (Both Tomcat and Jetty support AJPv13 protocol.) The AJPv13 compatible connector of the servlet engine must be enabled. Please refer to the servlet engine's documentation. Use the servlet engine's built-in HTTP server to test the servlet engine.

### Copy the web application files[¶](#copy-the-web-application-files "Permanent link")

Skip this step if the servlet engine runs on the same machine as LSWS.

If the servlet engine runs on a different machine, make a local copy of the web application files and save them on the LSWS machine. You will only need the directory for your specific web app, not the entire `web-apps` directory.

Make sure that the `WEB-INF/web.xml` file along with all static files and JSP files that the web application will need are on the same machine as well. The Java class files under the `WEB-INF` directory can be removed.

### Expand the web app[¶](#expand-the-web-app "Permanent link")

If the web application is packed in a `.war` file, expand it.

### Add servlet engine external app[¶](#add-servlet-engine-external-app "Permanent link")

In the WebAdmin Console, at the server level or virtual-host level, navigate to the **External App** tab. Add a servlet engine. Make sure the **Address** setting matches the AJP setting in the servlet engine.

### Create a Java Web App context[¶](#create-a-java-web-app-context "Permanent link")

In the WebAdmin Console at the virtual-host level, navigate to the **Context** tab and create a context.

Set the context **URI** to match the URI used by the servlet engine. Set **Location** to the directory of the web application. Select the servlet engine external application just created.

### Add a script handler[¶](#add-a-script-handler "Permanent link")

In the WebAdmin Console at the virtual-host level, navigate to the **Script Handler** tab. Add a script handler, and assign it to the **Suffix** `"jsp"/"cfm"`. Set the script handler **Type** to `Servlet Engine` and set the **Handler Name** to the name of the servlet engine just created.

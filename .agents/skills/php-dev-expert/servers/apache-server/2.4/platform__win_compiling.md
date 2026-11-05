# Compiling Apache httpd for Microsoft Windows - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/platform/win_compiling.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](platform.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Platform Specific Notes](platform.md)

# Compiling Apache httpd for Microsoft Windows

There are many important points to consider before you begin compiling
Apache HTTP Server (httpd). See [Using Apache HTTP
Server on Microsoft Windows](platform__windows.md) before you begin.

httpd can be built on Windows using a cmake-based build system or with
Visual Studio project files maintained by httpd developers. The cmake-based
build system directly supports more versions of Visual Studio but currently
has considerable functional limitations.

- ![](../images/down.gif) [Building httpd with the included Visual Studio project files](#vstudio)
- ![](../images/down.gif) [Building httpd with cmake](#cmake)

[![top](../images/up.gif)](#page-header)

## Building httpd with the included Visual Studio project files [¶](#vstudio "Permanent link")

### Requirements

Compiling Apache requires the following environment to be
properly installed:

- Disk Space

  Make sure you have at least 200 MB of free disk space
  available. After installation Apache requires approximately
  80 MB of disk space, plus space for log and cache files,
  which can grow rapidly. The actual disk space requirements
  will vary considerably based on your chosen configuration and
  any third-party modules or libraries, especially when OpenSSL
  is also built. Because many files are text and very easily
  compressed, NTFS filesystem compression cuts these requirements
  in half.
- Appropriate Patches

  The httpd binary is built with the help of several patches to
  third party packages, which ensure the released code is buildable
  and debuggable. These patches are available and distributed from <http://www.apache.org/dist/httpd/binaries/win32/patches_applied/>
  and are recommended to be applied to obtain identical results as the
  "official" ASF distributed binaries.
- Microsoft Visual C++ 6.0 (Visual Studio 97) or later.

  Apache can be built using the command line tools, or from
  within the Visual Studio IDE Workbench. The command line
  build requires the environment to reflect the `PATH`,
  `INCLUDE`, `LIB` and other variables
  that can be configured with the `vcvars32.bat` script.

  You may want the Visual Studio Processor Pack for your older
  version of Visual Studio, or a full (not Express) version of newer
  Visual Studio editions, for the ml.exe assembler. This will allow
  you to build OpenSSL, if desired, using the more efficient assembly
  code implementation.

  Only the Microsoft compiler tool chain is actively supported by
  the active httpd contributors. Although the project regularly accepts
  patches to ensure MinGW and other alternative builds work and improve
  upon them, they are not actively maintained and are often broken in
  the course of normal development.
- Updated Microsoft Windows Platform SDK, February 2003 or later.

  An appropriate Windows Platform SDK is included by default in the
  full (not express/lite) versions of Visual C++ 7.1 (Visual Studio 2002)
  and later, these users can ignore these steps unless explicitly choosing
  a newer or different version of the Platform SDK.

  To use Visual C++ 6.0 or 7.0 (Studio 2000 .NET), the Platform SDK
  environment must be prepared using the `setenv.bat`
  script (installed by the Platform SDK) before starting the command
  line build or launching the msdev/devenv GUI environment. Installing
  the Platform SDK for Visual Studio Express versions (2003 and later)
  should adjust the default environment appropriately.

  `"c:\Program Files\Microsoft Visual Studio\VC98\Bin\VCVARS32"  
  "c:\Program Files\Platform SDK\setenv.bat"`
- Perl and awk

  Several steps recommended here require a perl interpreter during
  the build preparation process, but it is otherwise not required.

  To install Apache within the build system, several files are
  modified using the `awk.exe` utility. awk was chosen since
  it is a very small download (compared with Perl or WSH/VB) and
  accomplishes the task of modifying configuration files upon
  installation. Brian Kernighan's
  <http://www.cs.princeton.edu/~bwk/btl.mirror/>
  site has a compiled native Win32 binary,
  <http://www.cs.princeton.edu/~bwk/btl.mirror/awk95.exe> which
  you must save with the name `awk.exe` (rather than
  `awk95.exe`).

  If awk.exe is not found, Makefile.win's install target
  will not perform substitutions in the installed .conf files.
  You must manually modify the installed .conf files to allow
  the server to start. Search and replace all "@token@" tags
  as appropriate.

  The Visual Studio IDE will only find `awk.exe`
  from the PATH, or executable path specified in the menu option
  Tools -> Options -> (Projects ->) Directories. Ensure
  awk.exe is in your system path.

  Also note that if you are using Cygwin tools
  (<http://www.cygwin.com/>)
  the awk utility is named `gawk.exe` and that the file
  `awk.exe` is really a symlink to the `gawk.exe`
  file. The Windows command shell does not recognize symlinks, and
  because of this building InstallBin will fail. A workaround is
  to delete `awk.exe` from the cygwin installation and
  copy `gawk.exe` to `awk.exe`. Also note the
  cygwin/mingw ports of gawk 3.0.x were buggy, please upgrade to 3.1.x
  before attempting to use any gawk port.
- [Optional] zlib library (for `mod_deflate`)

  Zlib must be installed into a `srclib` subdirectory named
  `zlib`. This must be built in-place. Zlib can be obtained
  from <http://www.zlib.net/> -- the
  `mod_deflate` is confirmed to work correctly with
  version 1.2.3.

  `nmake -f win32\Makefile.msc  
  nmake -f win32\Makefile.msc test`
- [Optional] OpenSSL libraries (for `mod_ssl`
  and `ab.exe` with ssl support)

  The OpenSSL library is cryptographic software. The country
  in which you currently reside may have restrictions on the import,
  possession, use, and/or re-export to another country, of encryption
  software. BEFORE using any encryption software, please check your
  country's laws, regulations and policies concerning the import,
  possession, or use, and re-export of encryption software, to see
  if this is permitted. See
  <http://www.wassenaar.org/>
  for more information.

  Configuring and building OpenSSL requires perl to be installed.

  OpenSSL must be installed into a `srclib` subdirectory
  named `openssl`, obtained from
  <http://www.openssl.org/source/>, in order to compile
  `mod_ssl` or the `abs.exe` project, which
  is ab.c with SSL support enabled. To prepare OpenSSL to be linked
  to Apache mod\_ssl or abs.exe, and disable patent encumbered features
  in OpenSSL, you might use the following build commands:

  `perl Configure no-rc5 no-idea enable-mdc2 enable-zlib VC-WIN32
  -Ipath/to/srclib/zlib -Lpath/to/srclib/zlib  
  ms\do_masm.bat  
  nmake -f ms\ntdll.mak`

  It is not advisable to use zlib-dynamic, as that transfers
  the cost of deflating SSL streams to the first request which must
  load the zlib dll. Note the suggested patch enables the -L flag to
  work with windows builds, corrects the name of zdll.lib and ensures
  .pdb files are generated for troubleshooting. If the assembler is
  not installed, you would add no-asm above and use ms\do\_ms.bat
  instead of the ms\do\_masm.bat script.
- [Optional] Database libraries (for `mod_dbd`
  and `mod_authn_dbm`)

  The apr-util library exposes dbm (keyed database) and dbd (query
  oriented database) client functionality to the httpd server and its
  modules, such as authentication and authorization. The sdbm dbm and
  odbc dbd providers are compiled unconditionally.

  The dbd support includes the Oracle instantclient package, MySQL,
  PostgreSQL and sqlite. To build these all, for example, set up the
  LIB to include the library path, INCLUDE to include the headers path,
  and PATH to include the dll bin path of all four SDK's, and set the
  DBD\_LIST environment variable to inform the build which client driver
  SDKs are installed correctly, e.g.;

  `set DBD_LIST=sqlite3 pgsql oracle mysql`

  Similarly, the dbm support can be extended with DBM\_LIST to
  build a Berkeley DB provider (db) and/or gdbm provider, by similarly
  configuring LIB, INCLUDE and PATH first to ensure the client library
  libs and headers are available.

  `set DBM_LIST=db gdbm`

  Depending on the choice of database distributions, it may be
  necessary to change the actual link target name (e.g. gdbm.lib vs.
  libgdb.lib) that are listed in the corresponding .dsp/.mak files
  within the directories srclib\apr-util\dbd or ...\dbm.

  See the README-win32.txt file for more hints on obtaining the
  various database driver SDKs.

### Building from Unix sources

The policy of the Apache HTTP Server project is to only release Unix sources.
Windows source packages made available for download have been supplied by
volunteers and may not be available for every release. You can still build
the server on Windows from the Unix source tarball with just a few additional
steps.

1. Download and unpack the Unix source tarball for the latest version.
2. Download and unpack the Unix source tarball for latest version of
   APR, AR-Util and APR-Iconv, place these sources in directories httpd-2.x.x\srclib\apr, httpd-2.x.x\srclib\apr-util and httpd-2.x.x\srclib\apr-iconv
3. Open a Command Prompt and CD to the httpd-2.x.x folder
4. Run the line endings conversion utility at the prompt;

`perl srclib\apr\build\lineends.pl`

You can now build the server with the Visual Studio development
environment using the IDE. Command-Line builds of the server are not
possible from Unix sources unless you export .mak files as explained
below.

### Command-Line Build

`Makefile.win` is the top level Apache makefile.
To compile Apache on Windows, simply use one of the following commands
to build the `release` or `debug` flavor:

`nmake /f Makefile.win _apacher  
  
nmake /f Makefile.win _apached`

Either command will compile Apache. The latter will disable
optimization of the resulting files, making it easier to single
step the code to find bugs and track down problems.

You can add your apr-util dbd and dbm provider choices with the
additional make (environment) variables DBD\_LIST and DBM\_LIST,
see the comments about [Optional] Database libraries, above.
Review the initial comments in Makefile.win for additional options
that can be provided when invoking the build.

### Developer Studio Workspace IDE Build

Apache can also be compiled using VC++'s Visual Studio
development environment. To simplify this process, a
Visual Studio workspace, `Apache.dsw`, is provided.
This workspace exposes the entire list of working `.dsp`
projects that are required for the complete Apache binary release.
It includes dependencies between the projects to assure that they
are built in the appropriate order.

Open the `Apache.dsw` workspace, and select
`InstallBin` (`Release` or `Debug` build,
as desired) as the Active Project. `InstallBin` causes all
related project to be built, and then invokes `Makefile.win` to
move the compiled executables and dlls. You may personalize the
`INSTDIR=` choice by changing `InstallBin`'s Settings,
General tab, Build command line entry. `INSTDIR` defaults to the
`/Apache2` directory. If you only want a test compile (without
installing) you may build the `BuildBin` project instead.

The `.dsp` project files are distributed in Visual Studio 6.0
(98) format. Visual C++ 5.0 (97) will recognize them. Visual Studio
2002 (.NET) and later users must convert `Apache.dsw` plus
the `.dsp` files into an `Apache.sln` plus
`.msproj` files. Be sure you reconvert the `.msproj`
file again if its source `.dsp` file changes! This is really
trivial, just open `Apache.dsw` in the VC++ 7.0 IDE once again
and reconvert.

There is a flaw in the .vcproj conversion of .dsp files. devenv.exe
will mis-parse the /D flag for RC flags containing long quoted /D'efines
which contain spaces. The command:

`perl srclib\apr\build\cvtdsp.pl -2005`

will convert the /D flags for RC flags to use an alternate, parseable
syntax; unfortunately this syntax isn't supported by Visual Studio 97
or its exported .mak files. These /D flags are used to pass the long
description of the mod\_apachemodule.so files to the shared .rc resource
version-identifier build.

**Building with OpenSSL 1.1.0 and up**
Due to difference in the build structure of OpenSSL begining with version
1.1.0 you will need to convert the dsp files affected with cvtdsp.pl from
APR 1.6 or greater. The command:

`perl srclib\apr\build\cvtdsp.pl -ossl11`

Visual Studio 2002 (.NET) and later users should also use the Build
menu, Configuration Manager dialog to uncheck both the `Debug`
and `Release` Solution modules `abs`,
`mod_deflate` and `mod_ssl` components, as
well as every component starting with `apr_db*`. These modules
are built by invoking `nmake`, or the IDE directly with the
`BinBuild` target, which builds those modules conditionally
if the `srclib` directories `openssl` and/or
`zlib` exist, and based on the setting of `DBD_LIST`
and `DBM_LIST` environment variables.

### Exporting command-line .mak files

Exported `.mak` files pose a greater hassle, but they are
required for Visual C++ 5.0 users to build `mod_ssl`,
abs (`ab` with SSL support) and/or
`mod_deflate`. The .mak files also support a broader
range of C++ tool chain distributions, such as Visual Studio Express.

You must first build all projects in order to create all dynamic
auto-generated targets, so that dependencies can be parsed correctly.
Build the entire project from within the Visual Studio 6.0 (98) IDE,
using the `BuildAll` target, then use the Project Menu Export
for all makefiles (checking on "with dependencies".) Run the following
command to correct absolute paths into relative paths so they will build
anywhere:

`perl srclib\apr\build\fixwin32mak.pl`

You must type this command from the *top level*
directory of the httpd source tree. Every
`.mak` and `.dep` project file within
the current directory and below will be corrected, and the
timestamps adjusted to reflect the `.dsp`.

Always review the generated `.mak` and `.dep`
files for Platform SDK or other local, machine specific file paths.
The `DevStudio\Common\MSDev98\bin\` (VC6) directory contains
a `sysincl.dat` file, which lists all exceptions. Update
this file (including both forward and backslashed paths, such as both
`sys/time.h` and `sys\time.h`) to ignore such
newer dependencies. Including local-install paths in a distributed
`.mak` file will cause the build to fail completely.

If you contribute back a patch that revises project files, we
must commit project files in Visual Studio 6.0 format. Changes
should be simple, with minimal compilation and linkage flags that
can be recognized by all Visual Studio environments.

### Installation

Once Apache has been compiled, it needs to be installed in
its server root directory. The default is the
`\Apache2` directory, of the same drive.

To build and install all the files into the desired folder
*dir* automatically, use one of the following
`nmake` commands:

`nmake /f Makefile.win installr INSTDIR=dir  
nmake /f Makefile.win installd INSTDIR=dir`

The *dir* argument to `INSTDIR` provides
the installation directory; it can be omitted if Apache is
to be installed into `\Apache22` (of the current
drive).

### Warning about building Apache from the development tree

Note only the `.dsp` files are maintained between `release`
builds. The `.mak` files are NOT regenerated, due to the tremendous
waste of reviewer's time. Therefore, you cannot rely on the `NMAKE`
commands above to build revised `.dsp` project files unless you
then export all `.mak` files yourself from the project. This is
unnecessary if you build from within the Microsoft
Developer Studio environment.

[![top](../images/up.gif)](#page-header)

## Building httpd with cmake [¶](#cmake "Permanent link")

The primary documentation for this build mechanism is in the
`README.cmake` file in the source distribution. Refer to that file
for detailed instructions.

Building httpd with cmake requires building APR and APR-util separately.
Refer to their `README.cmake` files for instructions.

The primary limitations of the cmake-based build are inherited from the APR-util
project, and are listed below because of their impact on httpd:

- No cmake build for the APR-iconv subproject is available, and the
  APR-util cmake build cannot consume an existing APR-iconv build. Thus,
  `mod_charset_lite` and possibly some third-party modules
  cannot be used.
- The cmake build for the APR-util subproject does not support most of the
  optional DBM and DBD libraries supported by the included Visual Studio
  project files. This limits the database backends supported by a number of
  bundled and third-party modules.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/platform/win_compiling.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/platform/win_compiling.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/platform/win_compiling.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

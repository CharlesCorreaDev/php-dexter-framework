# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rpminfo.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Constantes miscelâneas**

**`RPMVERSION`** ([string](language.types.string.md))
:   Versão da librpm do sistema.

**RPM Senses**

**`RPMSENSE_ANY`** ([int](language.types.integer.md))

**`RPMSENSE_LESS`** ([int](language.types.integer.md))

**`RPMSENSE_GREATER`** ([int](language.types.integer.md))

**`RPMSENSE_EQUAL`** ([int](language.types.integer.md))

**`RPMSENSE_POSTTRANS`** ([int](language.types.integer.md))

**`RPMSENSE_PREREQ`** ([int](language.types.integer.md))

**`RPMSENSE_PRETRANS`** ([int](language.types.integer.md))

**`RPMSENSE_INTERP`** ([int](language.types.integer.md))

**`RPMSENSE_SCRIPT_PRE`** ([int](language.types.integer.md))

**`RPMSENSE_SCRIPT_POST`** ([int](language.types.integer.md))

**`RPMSENSE_SCRIPT_PREUN`** ([int](language.types.integer.md))

**`RPMSENSE_SCRIPT_POSTUN`** ([int](language.types.integer.md))

**`RPMSENSE_SCRIPT_VERIFY`** ([int](language.types.integer.md))

**`RPMSENSE_FIND_REQUIRES`** ([int](language.types.integer.md))

**`RPMSENSE_FIND_PROVIDES`** ([int](language.types.integer.md))

**`RPMSENSE_TRIGGERIN`** ([int](language.types.integer.md))

**`RPMSENSE_TRIGGERUN`** ([int](language.types.integer.md))

**`RPMSENSE_TRIGGERPOSTUN`** ([int](language.types.integer.md))

**`RPMSENSE_MISSINGOK`** ([int](language.types.integer.md))

**`RPMSENSE_RPMLIB`** ([int](language.types.integer.md))

**`RPMSENSE_TRIGGERPREIN`** ([int](language.types.integer.md))

**`RPMSENSE_KEYRING`** ([int](language.types.integer.md))

**`RPMSENSE_CONFIG`** ([int](language.types.integer.md))

**RPM Mire**

**`RPMMIRE_DEFAULT`** ([int](language.types.integer.md))
:   O padrão de pesquisa é uma expressão regular com
    `\.`, `.*`,
    e `^...$` adicionados.

**`RPMMIRE_STRCMP`** ([int](language.types.integer.md))
:   O padrão de pesquisa é uma [string](language.types.string.md),
    usando `strcmp(3)`.

**`RPMMIRE_REGEX`** ([int](language.types.integer.md))
:   O padrão de pesquisa é uma expressão regular,
    usando `regcomp(3)`.

**`RPMMIRE_GLOB`** ([int](language.types.integer.md))
:   O padrão de pesquisa é uma expressão glob,
    usando `fnmatch(3)`.

**RPM tags**

**`RPMTAG_ARCH`** ([int](language.types.integer.md))

**`RPMTAG_ARCHSUFFIX`** ([int](language.types.integer.md))
:   Requer librpm >= 4.18

**`RPMTAG_ARCHIVESIZE`** ([int](language.types.integer.md))

**`RPMTAG_BASENAMES`** ([int](language.types.integer.md))
:   Nome (não caminho) dos arquivos, com índice do banco de dados.

**`RPMTAG_BUGURL`** ([int](language.types.integer.md))

**`RPMTAG_BUILDARCHS`** ([int](language.types.integer.md))

**`RPMTAG_BUILDHOST`** ([int](language.types.integer.md))

**`RPMTAG_BUILDTIME`** ([int](language.types.integer.md))

**`RPMTAG_C`** ([int](language.types.integer.md))

**`RPMTAG_CHANGELOGNAME`** ([int](language.types.integer.md))

**`RPMTAG_CHANGELOGTEXT`** ([int](language.types.integer.md))

**`RPMTAG_CHANGELOGTIME`** ([int](language.types.integer.md))

**`RPMTAG_CLASSDICT`** ([int](language.types.integer.md))

**`RPMTAG_CONFLICTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_CONFLICTNAME`** ([int](language.types.integer.md))
:   Dependências conflitantes com índice de banco de dados.

**`RPMTAG_CONFLICTNEVRS`** ([int](language.types.integer.md))

**`RPMTAG_CONFLICTS`** ([int](language.types.integer.md))

**`RPMTAG_CONFLICTVERSION`** ([int](language.types.integer.md))

**`RPMTAG_COOKIE`** ([int](language.types.integer.md))

**`RPMTAG_DBINSTANCE`** ([int](language.types.integer.md))

**`RPMTAG_DEPENDSDICT`** ([int](language.types.integer.md))

**`RPMTAG_DESCRIPTION`** ([int](language.types.integer.md))

**`RPMTAG_DIRINDEXES`** ([int](language.types.integer.md))

**`RPMTAG_DIRNAMES`** ([int](language.types.integer.md))
:   Diretório de arquivos, com índice de banco de dados.

**`RPMTAG_DISTRIBUTION`** ([int](language.types.integer.md))

**`RPMTAG_DISTTAG`** ([int](language.types.integer.md))

**`RPMTAG_DISTURL`** ([int](language.types.integer.md))

**`RPMTAG_DSAHEADER`** ([int](language.types.integer.md))

**`RPMTAG_E`** ([int](language.types.integer.md))

**`RPMTAG_ENCODING`** ([int](language.types.integer.md))

**`RPMTAG_ENHANCEFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_ENHANCENAME`** ([int](language.types.integer.md))
:   Dependências fracas, com índice de banco de dados, requer librpm >= 4.13.

**`RPMTAG_ENHANCENEVRS`** ([int](language.types.integer.md))

**`RPMTAG_ENHANCES`** ([int](language.types.integer.md))

**`RPMTAG_ENHANCEVERSION`** ([int](language.types.integer.md))

**`RPMTAG_EPOCH`** ([int](language.types.integer.md))

**`RPMTAG_EPOCHNUM`** ([int](language.types.integer.md))

**`RPMTAG_EVR`** ([int](language.types.integer.md))

**`RPMTAG_EXCLUDEARCH`** ([int](language.types.integer.md))

**`RPMTAG_EXCLUDEOS`** ([int](language.types.integer.md))

**`RPMTAG_EXCLUSIVEARCH`** ([int](language.types.integer.md))

**`RPMTAG_EXCLUSIVEOS`** ([int](language.types.integer.md))

**`RPMTAG_FILECAPS`** ([int](language.types.integer.md))

**`RPMTAG_FILECLASS`** ([int](language.types.integer.md))

**`RPMTAG_FILECOLORS`** ([int](language.types.integer.md))

**`RPMTAG_FILECONTEXTS`** ([int](language.types.integer.md))

**`RPMTAG_FILEDEPENDSN`** ([int](language.types.integer.md))

**`RPMTAG_FILEDEPENDSX`** ([int](language.types.integer.md))

**`RPMTAG_FILEDEVICES`** ([int](language.types.integer.md))

**`RPMTAG_FILEDIGESTALGO`** ([int](language.types.integer.md))

**`RPMTAG_FILEDIGESTS`** ([int](language.types.integer.md))

**`RPMTAG_FILEFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_FILEGROUPNAME`** ([int](language.types.integer.md))

**`RPMTAG_FILEINODES`** ([int](language.types.integer.md))

**`RPMTAG_FILELANGS`** ([int](language.types.integer.md))

**`RPMTAG_FILELINKTOS`** ([int](language.types.integer.md))

**`RPMTAG_FILEMD5S`** ([int](language.types.integer.md))

**`RPMTAG_FILEMODES`** ([int](language.types.integer.md))

**`RPMTAG_FILEMTIMES`** ([int](language.types.integer.md))

**`RPMTAG_FILENAMES`** ([int](language.types.integer.md))

**`RPMTAG_FILENLINKS`** ([int](language.types.integer.md))

**`RPMTAG_FILEPROVIDE`** ([int](language.types.integer.md))

**`RPMTAG_FILERDEVS`** ([int](language.types.integer.md))

**`RPMTAG_FILEREQUIRE`** ([int](language.types.integer.md))

**`RPMTAG_FILESIGNATURELENGTH`** ([int](language.types.integer.md))

**`RPMTAG_FILESIGNATURES`** ([int](language.types.integer.md))

**`RPMTAG_FILESIZES`** ([int](language.types.integer.md))

**`RPMTAG_FILESTATES`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERCONDS`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERINDEX`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERNAME`** ([int](language.types.integer.md))
:   Nome do gatilho do arquivo, com índice de banco de dados, requer librpm >= 4.13.

**`RPMTAG_FILETRIGGERPRIORITIES`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERSCRIPTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERSCRIPTPROG`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERSCRIPTS`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERTYPE`** ([int](language.types.integer.md))

**`RPMTAG_FILETRIGGERVERSION`** ([int](language.types.integer.md))

**`RPMTAG_FILEUSERNAME`** ([int](language.types.integer.md))

**`RPMTAG_FILEVERIFYFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_FSCONTEXTS`** ([int](language.types.integer.md))

**`RPMTAG_GIF`** ([int](language.types.integer.md))

**`RPMTAG_GROUP`** ([int](language.types.integer.md))
:   Grupo do pacote, com índice de banco de dados.

**`RPMTAG_HDRID`** ([int](language.types.integer.md))
:   Descontinuada, use **`RPMTAG_SHA1HEADER`** em seu lugar. Removida no librpm 6.

**`RPMTAG_HEADERCOLOR`** ([int](language.types.integer.md))

**`RPMTAG_HEADERI18NTABLE`** ([int](language.types.integer.md))

**`RPMTAG_HEADERIMAGE`** ([int](language.types.integer.md))

**`RPMTAG_HEADERIMMUTABLE`** ([int](language.types.integer.md))

**`RPMTAG_HEADERREGIONS`** ([int](language.types.integer.md))

**`RPMTAG_HEADERSIGNATURES`** ([int](language.types.integer.md))

**`RPMTAG_ICON`** ([int](language.types.integer.md))

**`RPMTAG_INSTALLCOLOR`** ([int](language.types.integer.md))

**`RPMTAG_INSTALLTID`** ([int](language.types.integer.md))
:   ID da transação de instalação, com índice de banco de dados.

**`RPMTAG_INSTALLTIME`** ([int](language.types.integer.md))

**`RPMTAG_INSTFILENAMES`** ([int](language.types.integer.md))
:   Caminho dos arquivos, com índice do banco de dados.

**`RPMTAG_INSTPREFIXES`** ([int](language.types.integer.md))

**`RPMTAG_LICENSE`** ([int](language.types.integer.md))

**`RPMTAG_LONGARCHIVESIZE`** ([int](language.types.integer.md))

**`RPMTAG_LONGFILESIZES`** ([int](language.types.integer.md))

**`RPMTAG_LONGSIGSIZE`** ([int](language.types.integer.md))

**`RPMTAG_LONGSIZE`** ([int](language.types.integer.md))

**`RPMTAG_MODULARITYLABEL`** ([int](language.types.integer.md))

**`RPMTAG_N`** ([int](language.types.integer.md))

**`RPMTAG_NAME`** ([int](language.types.integer.md))
:   Nome do pacote, com índice de banco de dados.

**`RPMTAG_NEVR`** ([int](language.types.integer.md))

**`RPMTAG_NEVRA`** ([int](language.types.integer.md))

**`RPMTAG_NOPATCH`** ([int](language.types.integer.md))

**`RPMTAG_NOSOURCE`** ([int](language.types.integer.md))

**`RPMTAG_NVR`** ([int](language.types.integer.md))

**`RPMTAG_NVRA`** ([int](language.types.integer.md))

**`RPMTAG_O`** ([int](language.types.integer.md))

**`RPMTAG_OBSOLETEFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_OBSOLETENAME`** ([int](language.types.integer.md))
:   Pacotes obsoletos, com índice de banco de dados.

**`RPMTAG_OBSOLETENEVRS`** ([int](language.types.integer.md))

**`RPMTAG_OBSOLETES`** ([int](language.types.integer.md))

**`RPMTAG_OBSOLETEVERSION`** ([int](language.types.integer.md))

**`RPMTAG_OLDENHANCES`** ([int](language.types.integer.md))

**`RPMTAG_OLDENHANCESFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_OLDENHANCESNAME`** ([int](language.types.integer.md))

**`RPMTAG_OLDENHANCESVERSION`** ([int](language.types.integer.md))

**`RPMTAG_OLDFILENAMES`** ([int](language.types.integer.md))

**`RPMTAG_OLDSUGGESTS`** ([int](language.types.integer.md))

**`RPMTAG_OLDSUGGESTSFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_OLDSUGGESTSNAME`** ([int](language.types.integer.md))

**`RPMTAG_OLDSUGGESTSVERSION`** ([int](language.types.integer.md))

**`RPMTAG_OPTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_ORDERFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_ORDERNAME`** ([int](language.types.integer.md))

**`RPMTAG_ORDERVERSION`** ([int](language.types.integer.md))

**`RPMTAG_ORIGBASENAMES`** ([int](language.types.integer.md))

**`RPMTAG_ORIGDIRINDEXES`** ([int](language.types.integer.md))

**`RPMTAG_ORIGDIRNAMES`** ([int](language.types.integer.md))

**`RPMTAG_ORIGFILENAMES`** ([int](language.types.integer.md))

**`RPMTAG_OS`** ([int](language.types.integer.md))

**`RPMTAG_P`** ([int](language.types.integer.md))

**`RPMTAG_PACKAGER`** ([int](language.types.integer.md))

**`RPMTAG_PATCH`** ([int](language.types.integer.md))

**`RPMTAG_PATCHESFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_PATCHESNAME`** ([int](language.types.integer.md))

**`RPMTAG_PATCHESVERSION`** ([int](language.types.integer.md))

**`RPMTAG_PAYLOADCOMPRESSOR`** ([int](language.types.integer.md))

**`RPMTAG_PAYLOADDIGEST`** ([int](language.types.integer.md))

**`RPMTAG_PAYLOADDIGESTALT`** ([int](language.types.integer.md))
:   Com librpm >= 4.16.

**`RPMTAG_PAYLOADDIGESTALGO`** ([int](language.types.integer.md))

**`RPMTAG_PAYLOADFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_PAYLOADFORMAT`** ([int](language.types.integer.md))

**`RPMTAG_PKGID`** ([int](language.types.integer.md))
:   Descontinuada, use **`RPMTAG_SIGMD5`** em seu lugar. Removida no librpm 6.

**`RPMTAG_PLATFORM`** ([int](language.types.integer.md))

**`RPMTAG_POLICIES`** ([int](language.types.integer.md))

**`RPMTAG_POLICYFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_POLICYNAMES`** ([int](language.types.integer.md))

**`RPMTAG_POLICYTYPES`** ([int](language.types.integer.md))

**`RPMTAG_POLICYTYPESINDEXES`** ([int](language.types.integer.md))

**`RPMTAG_POSTIN`** ([int](language.types.integer.md))

**`RPMTAG_POSTINFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_POSTINPROG`** ([int](language.types.integer.md))

**`RPMTAG_POSTTRANS`** ([int](language.types.integer.md))

**`RPMTAG_POSTTRANSFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_POSTTRANSPROG`** ([int](language.types.integer.md))

**`RPMTAG_POSTUN`** ([int](language.types.integer.md))

**`RPMTAG_POSTUNFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_POSTUNPROG`** ([int](language.types.integer.md))

**`RPMTAG_POSTUNTRANS`** ([int](language.types.integer.md))
:   Requer librpm >= 4.19

**`RPMTAG_POSTUNTRANSFLAGS`** ([int](language.types.integer.md))
:   Requer librpm >= 4.19

**`RPMTAG_POSTUNTRANSPROG`** ([int](language.types.integer.md))
:   Requer librpm >= 4.19

**`RPMTAG_PREFIXES`** ([int](language.types.integer.md))

**`RPMTAG_PREIN`** ([int](language.types.integer.md))

**`RPMTAG_PREINFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_PREINPROG`** ([int](language.types.integer.md))

**`RPMTAG_PRETRANS`** ([int](language.types.integer.md))

**`RPMTAG_PRETRANSFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_PRETRANSPROG`** ([int](language.types.integer.md))

**`RPMTAG_PREUN`** ([int](language.types.integer.md))

**`RPMTAG_PREUNFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_PREUNPROG`** ([int](language.types.integer.md))

**`RPMTAG_PREUNTRANS`** ([int](language.types.integer.md))
:   Requer librpm >= 4.19

**`RPMTAG_PREUNTRANSFLAGS`** ([int](language.types.integer.md))
:   Requer librpm >= 4.19

**`RPMTAG_PREUNTRANSPROG`** ([int](language.types.integer.md))
:   Requer librpm >= 4.19

**`RPMTAG_PROVIDEFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_PROVIDENAME`** ([int](language.types.integer.md))
:   Dependências fornecidas, com índice de banco de dados.

**`RPMTAG_PROVIDENEVRS`** ([int](language.types.integer.md))

**`RPMTAG_PROVIDES`** ([int](language.types.integer.md))

**`RPMTAG_PROVIDEVERSION`** ([int](language.types.integer.md))

**`RPMTAG_PUBKEYS`** ([int](language.types.integer.md))

**`RPMTAG_R`** ([int](language.types.integer.md))

**`RPMTAG_RECOMMENDFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_RECOMMENDNAME`** ([int](language.types.integer.md))
:   Dependências fracas recomendadas, com índice de banco de dados, requer librpm >= 4.13.

**`RPMTAG_RECOMMENDNEVRS`** ([int](language.types.integer.md))

**`RPMTAG_RECOMMENDS`** ([int](language.types.integer.md))

**`RPMTAG_RECOMMENDVERSION`** ([int](language.types.integer.md))

**`RPMTAG_RECONTEXTS`** ([int](language.types.integer.md))

**`RPMTAG_RELEASE`** ([int](language.types.integer.md))

**`RPMTAG_REMOVETID`** ([int](language.types.integer.md))

**`RPMTAG_REQUIREFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_REQUIRENAME`** ([int](language.types.integer.md))
:   Dependências requeridas, com índice de banco de dados.

**`RPMTAG_REQUIRENEVRS`** ([int](language.types.integer.md))

**`RPMTAG_REQUIRES`** ([int](language.types.integer.md))

**`RPMTAG_REQUIREVERSION`** ([int](language.types.integer.md))

**`RPMTAG_RPMVERSION`** ([int](language.types.integer.md))

**`RPMTAG_RSAHEADER`** ([int](language.types.integer.md))

**`RPMTAG_SHA1HEADER`** ([int](language.types.integer.md))
:   Assinatura SHA1, com índice de banco de dados.

**`RPMTAG_SHA256HEADER`** ([int](language.types.integer.md))

**`RPMTAG_SIGGPG`** ([int](language.types.integer.md))

**`RPMTAG_SIGMD5`** ([int](language.types.integer.md))
:   Assinatura MD5, com índice de banco de dados.

**`RPMTAG_SIGPGP`** ([int](language.types.integer.md))

**`RPMTAG_SIGSIZE`** ([int](language.types.integer.md))

**`RPMTAG_SIZE`** ([int](language.types.integer.md))

**`RPMTAG_SOURCE`** ([int](language.types.integer.md))

**`RPMTAG_SOURCEPACKAGE`** ([int](language.types.integer.md))

**`RPMTAG_SOURCEPKGID`** ([int](language.types.integer.md))

**`RPMTAG_SOURCERPM`** ([int](language.types.integer.md))

**`RPMTAG_SPEC`** ([int](language.types.integer.md))
:   Requer librpm >= 4.18

**`RPMTAG_SUGGESTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_SUGGESTNAME`** ([int](language.types.integer.md))
:   Dependências fracas sugeridas, com índice de banco de dados, requer librpm >= 4.13.

**`RPMTAG_SUGGESTNEVRS`** ([int](language.types.integer.md))

**`RPMTAG_SUGGESTS`** ([int](language.types.integer.md))

**`RPMTAG_SUGGESTVERSION`** ([int](language.types.integer.md))

**`RPMTAG_SUMMARY`** ([int](language.types.integer.md))

**`RPMTAG_SUPPLEMENTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_SUPPLEMENTNAME`** ([int](language.types.integer.md))
:   Dependências fracas, com índice de banco de dados, requer librpm >= 4.13.

**`RPMTAG_SUPPLEMENTNEVRS`** ([int](language.types.integer.md))

**`RPMTAG_SUPPLEMENTS`** ([int](language.types.integer.md))

**`RPMTAG_SUPPLEMENTVERSION`** ([int](language.types.integer.md))

**`RPMTAG_SYSUSERS`** ([int](language.types.integer.md))
:   Requer librpm >= 4.19

**`RPMTAG_TRANSFILETRIGGERCONDS`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERINDEX`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERNAME`** ([int](language.types.integer.md))
:   Nome do gatilho do arquivo de transação, com índice de banco de dados, requer librpm >= 4.13.

**`RPMTAG_TRANSFILETRIGGERPRIORITIES`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERSCRIPTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERSCRIPTPROG`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERSCRIPTS`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERTYPE`** ([int](language.types.integer.md))

**`RPMTAG_TRANSFILETRIGGERVERSION`** ([int](language.types.integer.md))

**`RPMTAG_TRANSLATIONURL`** ([int](language.types.integer.md))
:   Requer librpm >= 4.18

**`RPMTAG_TRIGGERCONDS`** ([int](language.types.integer.md))

**`RPMTAG_TRIGGERFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_TRIGGERINDEX`** ([int](language.types.integer.md))

**`RPMTAG_TRIGGERNAME`** ([int](language.types.integer.md))
:   Nome do gatilho, com índice de banco de dados.

**`RPMTAG_TRIGGERSCRIPTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_TRIGGERSCRIPTPROG`** ([int](language.types.integer.md))

**`RPMTAG_TRIGGERSCRIPTS`** ([int](language.types.integer.md))

**`RPMTAG_TRIGGERTYPE`** ([int](language.types.integer.md))

**`RPMTAG_TRIGGERVERSION`** ([int](language.types.integer.md))

**`RPMTAG_UPSTREAMRELEASES`** ([int](language.types.integer.md))
:   Requer librpm >= 4.18

**`RPMTAG_URL`** ([int](language.types.integer.md))

**`RPMTAG_V`** ([int](language.types.integer.md))

**`RPMTAG_VCS`** ([int](language.types.integer.md))

**`RPMTAG_VENDOR`** ([int](language.types.integer.md))

**`RPMTAG_VERBOSE`** ([int](language.types.integer.md))

**`RPMTAG_VERIFYSCRIPT`** ([int](language.types.integer.md))

**`RPMTAG_VERIFYSCRIPTFLAGS`** ([int](language.types.integer.md))

**`RPMTAG_VERIFYSCRIPTPROG`** ([int](language.types.integer.md))

**`RPMTAG_VERITYSIGNATUREALGO`** ([int](language.types.integer.md))
:   Com librpm >= 4.17.

**`RPMTAG_VERITYSIGNATURES`** ([int](language.types.integer.md))
:   Com librpm >= 4.17.

**`RPMTAG_VERSION`** ([int](language.types.integer.md))

**`RPMTAG_XPM`** ([int](language.types.integer.md))

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});

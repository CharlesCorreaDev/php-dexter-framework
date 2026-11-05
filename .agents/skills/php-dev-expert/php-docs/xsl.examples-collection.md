# Arquivos de exemplo collection.xml e collection.xsl

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsl.examples-collection.php

---

## Arquivos de exemplo collection.xml e collection.xsl

Muitos exemplos nesta referência requerem um arquivo XML e um XSL.
Serão usados os arquivos collection.xml e
collection.xsl que contêm o seguinte:

**Exemplo #1 collection.xml**

```
<collection>
 <cd>
  <title>Fight for your mind</title>
  <artist>Ben Harper</artist>
  <year>1995</year>
 </cd>
 <cd>
  <title>Electric Ladyland</title>
  <artist>Jimi Hendrix</artist>
  <year>1997</year>
 </cd>
</collection>
```

**Exemplo #2 collection.xsl**

```
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:param name="owner" select="'Nicolas Eliaszewicz'"/>
 <xsl:output method="html" encoding="iso-8859-1" indent="no"/>
 <xsl:template match="collection">
  Hey! Welcome to <xsl:value-of select="$owner"/>'s sweet CD collection!
  <xsl:apply-templates/>
 </xsl:template>
 <xsl:template match="cd">
  <h1><xsl:value-of select="title"/></h1>
  <h2>by <xsl:value-of select="artist"/> - <xsl:value-of select="year"/></h2>
  <hr />
 </xsl:template>
</xsl:stylesheet>
```

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

# For Each

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.examples.foreach.php

---

## For Each

Pode-se usar a instrução
[`foreach`](control-structures.foreach.md) do próprio PHP para iterar
sobre o conteúdo de um IEnumVariant COM/OLE padrão. Em termos leigos,
isso significa o foreach pode ser usado em lugares onde
`For Each` teria sido usado no código VB/ASP.

**Exemplo #1 For Each em ASP**

```
<%
Set domainObject = GetObject("WinNT://Domain")
For Each obj in domainObject
  Response.Write obj.Name & "<br />"
Next
%>
```

**Exemplo #2 foreach no PHP**

```
<?php
$domainObject = new COM("WinNT://Domain");
foreach ($domainObject as $obj) {
   echo $obj->Name . "<br />";
}
?>
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

# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom.examples.php

---

# Examples

Muitos exemplos nesta referência requerem um arquivo XML. Vamos usar
book.xml, que contém o seguinte:

**Exemplo #1 book.xml**

```
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE book PUBLIC "-//OASIS//DTD DocBook XML V4.1.2//EN"
 "http://www.oasis-open.org/docbook/xml/4.1.2/docbookx.dtd" [
]>
<book id="listing">
 <title>My lists</title>
 <chapter id="books">
  <title>My books</title>
  <para>
   <informaltable>
    <tgroup cols="4">
     <thead>
      <row>
       <entry>Title</entry>
       <entry>Author</entry>
       <entry>Language</entry>
       <entry>ISBN</entry>
      </row>
     </thead>
     <tbody>
      <row>
       <entry>The Grapes of Wrath</entry>
       <entry>John Steinbeck</entry>
       <entry>en</entry>
       <entry>0140186409</entry>
      </row>
      <row>
       <entry>The Pearl</entry>
       <entry>John Steinbeck</entry>
       <entry>en</entry>
       <entry>014017737X</entry>
      </row>
      <row>
       <entry>Samarcande</entry>
       <entry>Amine Maalouf</entry>
       <entry>fr</entry>
       <entry>2253051209</entry>
      </row>
      <!-- TODO: I have a lot of remaining books to add.. -->
     </tbody>
    </tgroup>
   </informaltable>
  </para>
 </chapter>
</book>
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

# Escapando o HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.basic-syntax.phpmode.php

---

## Escapando o HTML

Tudo fora de um par de tags de abertura e fechamento é ignorado pelo
interpretador PHP, o que permite que arquivos PHP tenham conteúdo misto. Isso permite que o PHP
seja incluído em documentos HTML, por exemplo, para criar templates.

**Exemplo #1 Incorporando o PHP no HTML**

```
<p>Isso será ignorado pelo PHP e exibido pelo navegador.</p>
<?php echo 'Enquanto isto vai ser interpretado.'; ?>
<p>Isso também será ignorado pelo PHP e exibido no navegador.</p>
```

Isso funcionará como esperado, porque quando o interpretador PHP encontra a tag de fechamento
?>, ele simplesmente começa a repassar o que quer que encontre (exceto a nova linha
imediata, veja a seção sobre
[separação de instruções](language.basic-syntax.instruction-separation.md)),
até encontrar outra tag de abertura, a menos que esteja no meio de uma declaração condicional,
caso em que o interpretador determinará o resultado da
condicional antes de decidir qual caminho tomar.
Veja o próximo exemplo.

Usando estruturas com condições

**Exemplo #2 Escape avançado usando condições**

```
<?php if (true): ?>
  Isso irá aparecer se a expressão for verdadeira.
<?php else: ?>
  Senão isso irá aparecer.
<?php endif; ?>
```

Neste exemplo, o PHP pulará os blocos onde a condição não for satisfeita, mesmo
que os trechos de código estejam fora das tags de abertura e fechamento do PHP,
pois o interpretador PHP pulará os blocos contidos
em uma condição que não foi satisfeita.

Para imprimir grandes blocos de texto, sair do modo de interpretação do PHP é
geralmente mais eficiente do que enviar todo o texto usando
[echo](function.echo.md) ou [print](function.print.md).

> **Nota**:
>
> Se o PHP for incluído no XML ou XHTML, as tags normais
> `<?php ?>` devem ser usadas para manter a conformidade
> com os padrões.

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

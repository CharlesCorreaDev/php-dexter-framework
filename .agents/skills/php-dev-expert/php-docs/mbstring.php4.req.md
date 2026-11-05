# Requisitos de Codificação de Caracteres em PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.php4.req.php

---

# Requisitos de Codificação de Caracteres em PHP

As codificações dos seguintes tipos são seguras para uso com o PHP.

- Uma codificação de byte único,
  - que possui mapeamentos compatíveis com ASCII (compatíveis com ISO646) para os
    caracteres no intervalo de `00h` a
    `7fh`.
- Uma codificação multibyte,
  - que possui mapeamentos compatíveis com ASCII para os caracteres no intervalo de
    `00h` a `7fh`.
  - que não usa sequências de escape ISO2022.
  - que não usa um valor de `00h` a
    `7fh` em nenhum dos bytes compostos
    que representam um único caractere.

Esses são exemplos de codificações de caracteres que provavelmente não funcionarão
corretamente com o PHP.

```
JIS, SJIS, ISO-2022-JP, BIG-5
```

Embora scripts PHP escritos em qualquer uma dessas codificações possam não funcionar,
especialmente no caso em que strings codificadas aparecem como identificadores
ou literais no script, você pode evitar o uso dessas codificações configurando a
função de filtro de codificação transparente do `mbstring` para
consultas HTTP de entrada.

> **Nota**:
>
> É altamente desencorajado usar SJIS, BIG5, CP936, CP949 e GB18030 para
> a codificação interna, a menos que você esteja familiarizado com o analisador, o
> scanner e a codificação de caracteres.

> **Nota**:
>
> Se você estiver se conectando a um banco de dados com PHP, é recomendável
> que você use a mesma codificação de caracteres para tanto o banco de dados quanto o
> `codificação interna` para facilitar o uso e obter melhor
> desempenho.
>
> Se estiver usando o PostgreSQL, a codificação de caracteres usada no
> banco de dados e aquela usada no PHP podem diferir, pois ele oferece suporte
> à conversão automática de conjunto de caracteres entre o backend e o frontend.

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

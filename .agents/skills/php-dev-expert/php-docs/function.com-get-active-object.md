# Retorna um identificador para uma instância já em execução de um objeto COM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.com-get-active-object.php

---

# com\_get\_active\_object

(PHP 5, PHP 7, PHP 8)

com\_get\_active\_object — Retorna um identificador para uma instância já em execução de um objeto COM

### Descrição

function **com\_get\_active\_object**([string](language.types.string.md) `$prog_id`, [?](language.types.null.md)[int](language.types.integer.md) `$codepage` = **`null`**): [variant](class.variant.md)

**com\_get\_active\_object()** é semelhante a criar uma nova
instância de um objeto [com](class.com.md), exceto que só
retornará um objeto ao script se o objeto já estiver em execução.
Os aplicativos OLE usam algo conhecido como "`Running Object Table`"
para permitir que aplicativos bem conhecidos sejam iniciados apenas uma vez; esta função
expõe a função GetActiveObject() da biblioteca COM para obter um identificador em uma
instância em execução.

### Parâmetros

`prog_id`
:   `prog_id` deve ser o ProgID ou CLSID do
    objeto que a ser acessado (por exemplo
    `Word.Application`).

`codepage`
:   Atua exatamente da mesma maneira que para a classe [com](class.com.md).

### Valor Retornado

Se o objeto solicitado estiver em execução, ele será retornado ao script
como qualquer outro objeto COM.

### Erros/Exceções

Há vários motivos pelos quais essa função pode falhar, sendo o mais
comum o fato de o objeto ainda não estar em execução. Nessa situação,
o código de erro de exceção será **`MK_E_UNAVAILABLE`**;
o método `getCode` do objeto de exceção pode ser usado
para verificar o código da exceção.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `codepage` agora pode ser nulo. |

### Notas

**Aviso**

Usar **com\_get\_active\_object()** em um contexto de servidor
web nem sempre é uma ideia inteligente. A maioria das aplicações COM/OLE não é projetada
para lidar com mais de um cliente simultaneamente, mesmo (ou especialmente!) o
Microsoft Office. Consulte as [» Considerações para Automação do
Office no Lado do Servidor](https://support.microsoft.com/kb/257757) para obter mais informações sobre
os problemas gerais envolvidos.

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

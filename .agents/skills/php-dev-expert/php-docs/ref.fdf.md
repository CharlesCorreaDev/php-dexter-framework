# Funções de FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.fdf.php

---

# Funções de FDF

## Índice

- [fdf\_add\_doc\_javascript](function.fdf-add-doc-javascript.md) — Adiciona código javascript ao documento FDF
- [fdf\_add\_template](function.fdf-add-template.md) — Adiciona um modelo ao documento FDF
- [fdf\_close](function.fdf-close.md) — Fecha um documento FDF
- [fdf\_create](function.fdf-create.md) — Cria um novo documento FDF
- [fdf\_enum\_values](function.fdf-enum-values.md) — Chama uma função definida pelo usuário para cada valor do documento
- [fdf\_errno](function.fdf-errno.md) — Retorna o código de erro para a última operação fdf
- [fdf\_error](function.fdf-error.md) — Retorna a descrição do erro para o código de erro FDF
- [fdf\_get\_ap](function.fdf-get-ap.md) — Obtém a aparência de um campo
- [fdf\_get\_attachment](function.fdf-get-attachment.md) — Extrai o arquivo carregado incorporado no FDF
- [fdf\_get\_encoding](function.fdf-get-encoding.md) — Obtém o valor da chave /Encoding
- [fdf\_get\_file](function.fdf-get-file.md) — Obtém o valor da chave /F
- [fdf\_get\_flags](function.fdf-get-flags.md) — Obtém os sinalizadores de um campo
- [fdf\_get\_opt](function.fdf-get-opt.md) — Obtém um valor do array de opções de um campo
- [fdf\_get\_status](function.fdf-get-status.md) — Obtém o valor da chave /STATUS
- [fdf\_get\_value](function.fdf-get-value.md) — Obtém o valor de um campo
- [fdf\_get\_version](function.fdf-get-version.md) — Obtém o número da versão para a API ou arquivo FDF
- [fdf\_header](function.fdf-header.md) — Define cabeçalhos de saída específicos de FDF
- [fdf\_next\_field\_name](function.fdf-next-field-name.md) — Obtém o próximo nome de campo
- [fdf\_open](function.fdf-open.md) — Abre um documento FDF
- [fdf\_open\_string](function.fdf-open-string.md) — Lê um documento FDF de uma string
- [fdf\_remove\_item](function.fdf-remove-item.md) — Define o quadro de destino para o formulário
- [fdf\_save](function.fdf-save.md) — Salva um documento FDF
- [fdf\_save\_string](function.fdf-save-string.md) — Retorna o documento FDF como uma string
- [fdf\_set\_ap](function.fdf-set-ap.md) — Define a aparência de um campo
- [fdf\_set\_encoding](function.fdf-set-encoding.md) — Define a codificação de caracteres FDF
- [fdf\_set\_file](function.fdf-set-file.md) — Define o documento PDF para exibição de dados FDF
- [fdf\_set\_flags](function.fdf-set-flags.md) — Define um sinalizador de um campo
- [fdf\_set\_javascript\_action](function.fdf-set-javascript-action.md) — Define uma ação javascript de um campo
- [fdf\_set\_on\_import\_javascript](function.fdf-set-on-import-javascript.md) — Adiciona código javascript para ser executado quando o Acrobat abre o FDF
- [fdf\_set\_opt](function.fdf-set-opt.md) — Define uma opção de um campo
- [fdf\_set\_status](function.fdf-set-status.md) — Define o valor da chave /STATUS
- [fdf\_set\_submit\_form\_action](function.fdf-set-submit-form-action.md) — Define uma ação de envio de formulário de um campo
- [fdf\_set\_target\_frame](function.fdf-set-target-frame.md) — Define o quadro de destino para exibição do formulário
- [fdf\_set\_value](function.fdf-set-value.md) — Define o valor de um campo
- [fdf\_set\_version](function.fdf-set-version.md) — Define o número da versão para um arquivo FDF

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

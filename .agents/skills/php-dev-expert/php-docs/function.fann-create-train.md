# Cria uma estrutura de dados de treinamento vazia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-train.php

---

# fann\_create\_train

(PECL fann >= 1.0.0)

fann\_create\_train — Cria uma estrutura de dados de treinamento vazia

### Descrição

function **fann\_create\_train**([int](language.types.integer.md) `$num_data`, [int](language.types.integer.md) `$num_input`, [int](language.types.integer.md) `$num_output`): [resource](language.types.resource.md)

Cria uma estrutura de dados de treinamento vazia.

### Parâmetros

`num_data`
:   O número de dados de treinamento.

`num_input`
:   O número de entradas por dados de treinamento.

`num_output`
:   O número de saídas por dados de treinamento.

### Valor Retornado

Retorna um [resource](language.types.resource.md) de dados de treinamento em caso de sucesso ou **`false`** em caso de erro.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_read\_train\_from\_file()](function.fann-read-train-from-file.md) - Lê um arquivo que armazena dados de treinamento
- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_destroy\_train()](function.fann-destroy-train.md) - Destrói os dados de treinamento
- [fann\_save\_train()](function.fann-save-train.md) - Grava a estrutura de treinamento em um arquivo

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

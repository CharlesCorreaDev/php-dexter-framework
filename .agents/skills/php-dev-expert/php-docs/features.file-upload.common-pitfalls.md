# Problemas Comuns

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.file-upload.common-pitfalls.php

---

## Problemas Comuns

O item `MAX_FILE_SIZE` não pode assumir um tamanho de arquivo
maior que o tamanho de arquivo configurado em [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize) no arquivo php.ini.
O valor padrão é de 2 megabytes.

Se um limite de memória está ativo, um valor maior para o limite de memória no parâmetro [memory\_limit](ini.core.md#ini.memory-limit) pode ser necessário. Tenha certeza de
estabelecer um limite de memória grande o suficiente através do parâmetro
[memory\_limit](ini.core.md#ini.memory-limit).

Se o tempo máximo de execução definido através do parâmetro [max\_execution\_time](info.configuration.md#ini.max-execution-time)
for muito pequeno, a execução do script pode ultrapassar o limite de tempo. Tenha
certeza de estabelecer um tempo máximo de execução grande o suficiente através do parâmetro `max_execution_time`.

> **Nota**:
>
> O parâmetro [max\_execution\_time](info.configuration.md#ini.max-execution-time) somente
> afeta o tempo de execução do script em si. Qualquer tempo gasto com
> atividades que aconteçam fora da execução do script
> como chamadas de sistema usando [system()](function.system.md), a função
> [sleep()](function.sleep.md), pesquisas em banco de dados, tempo gasto pelo
> processo de enviar um arquivo, etc. não são considerados no momento de determinar o limite de tempo
> máximo de um script em execução.

**Aviso**

O parâmetro [max\_input\_time](info.configuration.md#ini.max-input-time) define o tempo máximo,
em segundos, que é permitido ao script a receber entradas, isto inclui
envio de arquivos. Para um arquivo grande, múltiplos arquivos ou usuários com conexões lentas,
o padrão de `60` segundos pode ser ultrapassado.

Se o parâmetro [post\_max\_size](ini.core.md#ini.post-max-size) for muito pequeno,
arquivos grandes podem não ser carregados. Tenha certeza de definir o parâmetro
`post_max_size` grande o suficiente.

O
parâmetro [max\_file\_uploads](ini.core.md#ini.max-file-uploads)
controla o número máximo de arquivos que podem ser enviados em uma única
requisição. Caso sejam enviados mais arquivos que o definido neste limite, então
[$\_FILES](reserved.variables.files.md) interrompe o processamento de arquivos uma vez que o limite
tenha sido atingido. Por exemplo, se o parâmetro
[max\_file\_uploads](ini.core.md#ini.max-file-uploads) está definido como
`10`, então [$\_FILES](reserved.variables.files.md) nunca possuirá
mais de 10 itens.

Não validar o arquivo que você está operando pode permitir que os usuários acessem
informações sensíveis em outros diretórios.

Devido ao grande número de estilos de listagem de diretórios não podemos garantir
que arquivos com nomes exóticos (como os que contém espaços) sejam manuseados corretamente.

Um desenvolvedor não deve misturar campos comuns de entrada `input` e campos de envio de arquivo na mesma
variável de formulário (usando um nome de campo `input` como `foo[]`).

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

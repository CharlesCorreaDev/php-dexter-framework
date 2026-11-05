# Gerenciamento de Memória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.memory.php

---

# Gerenciamento de Memória

**Introdução**

O Driver Nativo MySQL gerencia memória diferente da Biblioteca Cliente MySQL.
As bibliotecas diferem na forma como a memória é alocada e liberada,
como a memória é alocada em pedaços durante a leitura dos resultados do MySQL, quais opções
de depuração e desenvolvimento existem e como os resultados lidos do MySQL são vinculados
às variáveis ​​de usuário do PHP.

As notas a seguir pretendem ser uma introdução e um resumo aos usuários
interessados ​​em compreender o Driver Nativo MySQL em nível de código C.

**Funções de gerenciamento de memória usadas**

Toda a alocação e desalocação de memória é feita usando as funções de gerenciamento
de memória do PHP. Portanto, o consumo de memória do mysqlnd pode ser rastreado
usando chamadas de API PHP, como [memory\_get\_usage()](function.memory-get-usage.md). Como a memória
é alocada e liberada usando o gerenciamento de memória do PHP, as alterações podem não
se tornar imediatamente visíveis no nível do sistema operacional. O gerenciamento
de memória do PHP atua como um proxy que pode atrasar a liberação de memória para
o sistema. Devido a isso, é difícil comparar o uso de memória do Driver Nativo MySQL
e da Biblioteca Cliente MySQL. A Biblioteca Cliente MySQL
está usando as chamadas de gerenciamento de memória do sistema operacional diretamente, portanto, os
efeitos podem ser observados imediatamente no nível do sistema operacional.

Qualquer limite de memória imposto pelo PHP também afeta o Driver Nativo MySQL. Isso
pode causar erros de falta de memória ao buscar conjuntos de resultados grandes que excedem
o tamanho da memória restante disponibilizada pelo PHP. Como a Biblioteca Cliente MySQL
não usa funções de gerenciamento de memória PHP, ela não está em conformidade
com nenhum limite de memória PHP definido. Se estiver usando a Biblioteca Cliente MySQL, dependendo do
modelo de implantação, o consumo de memória do processo PHP pode crescer
além do limite de memória do PHP. Mas também os scripts PHP podem processar conjuntos
de resultados maiores, pois partes da memória alocada para armazenar os conjuntos de resultados estão além
do controle do mecanismo PHP.

As funções de gerenciamento de memória do PHP são invocadas pelo Driver Nativo MySQL através
de um encapsulador leve. Entre outros, o encapsulador facilita a depuração.

**Lidando com conjuntos de resultados**

Os vários servidores MySQL e as diversas APIs do cliente diferenciam
entre conjuntos de resultados [com buffer e sem buffer](mysqli.quickstart.statements.md).
Conjuntos de resultados sem buffer são transferidos linha por linha do MySQL para o cliente
à medida que o cliente itera sobre os resultados. Os resultados armazenados em buffer são buscados
integralmente pela biblioteca cliente antes de serem repassados ​​ao cliente.

O Driver Nativo MySQL está utilizando fluxos PHP para a comunicação da rede
com o Servidor MySQL. Os resultados enviados pelo MySQL são buscados dos buffers da
rede de fluxos do PHP para o buffer de resultados do mysqlnd. O buffer resultante é
composto de zvals. Numa segunda etapa os resultados são disponibilizados para o script PHP.
Esta transferência final do buffer de resultados para variáveis ​​PHP impacta o consumo de memória
e é principalmente perceptível ao usar conjuntos de resultados armazenados em buffer.

Por padrão o Driver Nativo MySQL tenta evitar armazenar
resultados em buffer duas vezes na memória. Os resultados são mantidos apenas uma vez nos buffers
de resultados internos e seus zvals. Quando os resultados são buscados em variáveis ​​PHP
pelo script PHP, as variáveis ​​farão referência aos buffers de resultados internos.
Os resultados da consulta ao banco de dados não são copiados e mantidos na memória apenas uma vez.
Caso o usuário modifique o conteúdo de uma variável que contém os resultados do banco de dados,
uma cópia na gravação deverá ser executada para evitar a alteração do buffer de resultados interno
referenciado. O conteúdo do buffer não deve ser modificado porque o usuário
pode decidir ler o conjunto de resultados uma segunda vez. O mecanismo de cópia na gravação
é implementado usando uma lista de gerenciamento de referência
adicional e o uso de contadores de referência zval padrão.
A cópia na gravação também deve ser feita se o usuário ler um conjunto de resultados em variáveis ​​PHP
e liberar um conjunto de resultados antes que as variáveis ​​sejam desdefinidas.

De modo geral, esse padrão funciona bem para scripts que leem um conjunto
de resultados uma vez e não modificam variáveis ​​que contêm resultados. Sua principal desvantagem
é a sobrecarga de memória causada pelo gerenciamento de referência adicional que
vem principalmente do fato de que as variáveis ​​do usuário que contêm resultados
não podem ser totalmente liberadas até que o gerenciamento de referência do mysqlnd
pare de referenciá-las. O Driver Nativo MySQL remove a referência às
variáveis ​​do usuário quando o conjunto de resultados é liberado ou uma cópia na gravação é executada.
Um observador verá o consumo total de memória crescer até que o conjunto de resultados
seja liberado. Use as [estatísticas](mysqlnd.stats.md) para verificar
se um script libera conjuntos de resultados explicitamente ou se o driver faz liberações
implícitas e, portanto, a memória é usada por um tempo maior que o necessário. As estatísticas
também ajudam a ver quantas operações de cópia na gravação ocorreram.

Um script PHP lendo muitas linhas pequenas de um conjunto de resultados em buffer usando um trecho de código
igual ou equivalente a `while ($row = $res->fetch_assoc()) { ... }`
pode otimizar o consumo de memória solicitando cópias em vez de referências.
Embora solicitar cópias signifique manter os resultados duas vezes na memória, isso permite
que o PHP libere a cópia contida em `$row` à medida que o conjunto de resultados
está sendo iterado e antes de liberar o próprio conjunto de resultados. Em um servidor carregado,
a otimização do uso máximo de memória pode ajudar a melhorar o desempenho geral do sistema,
embora para um script individual a abordagem de cópia possa ser mais lenta devido a
alocações adicionais e operações de cópia de memória.

**Monitoramento e depuração**

Existem diversas formas de rastrear o uso de memória do Driver Nativo MySQL.
Se o objetivo é obter uma visão geral rápida de alto nível ou verificar a eficiência da memória
dos scripts PHP, então verifique as [estatísticas](mysqlnd.stats.md)
coletadas pela biblioteca. As estatísticas permitem, por exemplo, capturar
instruções SQL que geram mais resultados do que são processados ​​por um script PHP.

O log de rastreamento [debug](mysqlnd.config.md#ini.mysqlnd.debug) pode ser configurado para
registrar chamadas de gerenciamento de memória. Isso ajuda a ver quando a memória está alocada
ou liberada. No entanto, o tamanho dos blocos de memória solicitados pode não estar listado.

Algumas versões recentes do Driver Nativo MySQL apresentam a emulação de
situações aleatórias de falta de memória. Este recurso deve ser usado apenas pelos
desenvolvedores C da biblioteca ou pelos autores do [plugin](mysqlnd.plugin.md)
do mysqlnd. Por favor, pesquise no código-fonte as configurações correspondentes do PHP
e mais detalhes. O recurso é considerado privado e pode ser
modificado a qualquer momento sem aviso prévio.

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

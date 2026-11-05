# Consultas com buffer e sem buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlinfo.concepts.buffering.php

---

## Consultas com buffer e sem buffer

As consultas usam o modo de buffer por padrão. Isso significa que os resultados da consulta são
imediatamente transferidos do servidor MySQL para o PHP e então mantidos na memória
do processo PHP. Isso permite operações adicionais, como contar o
número de linhas e mover (buscar) o ponteiro do resultado atual. Também permite
emitir consultas adicionais na mesma conexão enquanto trabalha no conjunto de resultados.
A desvantagem do modo buffer é que conjuntos de resultados maiores podem exigir
bastante memória. A memória será mantida ocupada até que todas as referências ao
conjunto de resultados sejam desativadas ou o conjunto de resultados seja explicitamente liberado, o que acontecerá
automaticamente durante o término da solicitação, o mais tardar. A terminologia "armazenar resultado" também é usada
para o modo buffer, pois todo o conjunto de resultados é armazenado de uma só vez.

> **Nota**:
>
> Ao usar a libmysqlclient como biblioteca, o limite de memória do PHP não contará a memória usada
> para conjuntos de resultados, a menos que os dados sejam buscados em variáveis ​​PHP. Com o mysqlnd
> a memória contabilizada incluirá o conjunto completo de resultados.

Consultas MySQL sem buffer executam a consulta e aguardam
que os dados do servidor MySQL sejam buscados. Isso usa menos memória
do lado do PHP, mas pode aumentar a carga no servidor. A menos que o conjunto completo de resultados tenha sido
obtido do servidor, nenhuma consulta adicional poderá ser enviada pela mesma conexão. Consultas
sem buffer também podem ser chamadas de "resultado de uso". Depois que todas as linhas do conjunto de resultados
forem buscadas, o conjunto de resultados desaparecerá e não poderá ser iterado novamente.

Seguindo essas características, consultas sem buffer devem ser utilizadas apenas
quando se espera um grande conjunto de resultados que será processado sequencialmente.
As consultas sem buffer contêm uma série de armadilhas que tornam mais
difícil seu uso, por exemplo, o número de linhas no conjunto de resultados é desconhecido
até que a última linha seja obtida.
Consultas em buffer são a maneira mais fácil e flexível de processar conjuntos de resultados.

Como as consultas em buffer são o padrão, os exemplos abaixo demonstrarão como
executar consultas sem buffer com cada API.

**Exemplo #1 Exemplo de consulta sem buffer: mysqli**

```
<?php
$mysqli  = new mysqli("localhost", "my_user", "my_password", "world");
$unbufferedResult = $mysqli->query("SELECT Name FROM City", MYSQLI_USE_RESULT);

foreach ($unbufferedResult as $row) {
    echo $row['Name'] . PHP_EOL;
}
?>
```

**Exemplo #2 Exemplo de consulta sem buffer: pdo\_mysql**

```
<?php
$pdo = new PDO("mysql:host=localhost;dbname=world", 'my_user', 'my_password');
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

$unbufferedResult = $pdo->query("SELECT Name FROM City");
foreach ($unbufferedResult as $row) {
    echo $row['Name'] . PHP_EOL;
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

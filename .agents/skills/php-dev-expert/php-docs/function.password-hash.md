# Cria um hash de senha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.password-hash.php

---

# password\_hash

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

password\_hash — Cria um hash de senha

### Descrição

function **password\_hash**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`, [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$algo`, [array](language.types.array.md) `$options` = []): [string](language.types.string.md)

**password\_hash()** cria um novo hash de senha usando um algoritmo forte
de hash de mão única.

Os seguintes algoritmos são suportados atualmente:

- **`PASSWORD_DEFAULT`** - Usa o algoritmo bcrypt (padrão desde o PHP 5.5.0).
  Perceba que essa constante foi desenhada para mudar ao longo do tempo a medida que novos algoritmos mais fortes forem adicionados
  ao PHP. Por essa razão, o comprimento do resultado da utilização desse identificador pode mudar ao longo
  do tempo. Por isso, é recomendado que armazene o resultado em uma coluna do banco de dados que possa ser expandida
  além dos 60 bytes (255 bytes seria uma boa escolha).
- **`PASSWORD_BCRYPT`** - Usa o algoritmo bcrypt para
  criar o hash. Produzirá um hash compatível com o padrão [crypt()](function.crypt.md) usando
  o identificador `$2y$`.
- **`PASSWORD_ARGON2I`** - Usa o algoritmo Argon2i para criar o hash.
  Este algoritmo somente estará disponível se o PHP tiver sido compilado com suporte a Argon2.
- **`PASSWORD_ARGON2ID`** - Usa o algoritmo Argon2id para criar o hash.
  Este algoritmo somente estará disponível se o PHP tiver sido compilado com suporte a Argon2.

Opções suportadas por **`PASSWORD_BCRYPT`**:

- `salt` ([string](language.types.string.md)) - para fornecer manualmente um salt a ser usado quando estiver sendo feito o hash da senha.
  Perceba que isso irá sobrepor e evitar que um salt seja gerado automaticamente.

  Se omitido, um salt aleatório será gerado pela função **password\_hash()** para
  cada senha sofrendo hash. Esse é o modo de operação desejado.

  **Aviso**

  A opção salt foi descontinuada. Agora é
  preferível que simplesmente se utilize o salt que é gerado por padrão.
  A partir do PHP 8.0.0, um salt fornecido explicitamente será ignorado.
- `cost` ([int](language.types.integer.md)) - indica o custo de algoritmo que deve ser usado.
  Exemplos desses valores podem ser encontrados na página da função [crypt()](function.crypt.md).

  Se omitido, um valor padrão `12` será usado. Este é um bom
  patamar de custo, mas deve ser ajustado dependendo do equipamento em uso.

Opções suportadas por **`PASSWORD_ARGON2I`**
e **`PASSWORD_ARGON2ID`**:

- `memory_cost` ([int](language.types.integer.md)) - Máximo de mémoria (em kibibytes) que pode
  ser utilizado para computar o hash Argon2. O valor padrão é **`PASSWORD_ARGON2_DEFAULT_MEMORY_COST`**.
- `time_cost` ([int](language.types.integer.md)) - Número de iterações (passagens)
  usadas para computar o hash Argon2. O valor padrão é **`PASSWORD_ARGON2_DEFAULT_TIME_COST`**.
- `threads` ([int](language.types.integer.md)) - Número de threads para computar
  o hash Argon2. O valor padrão é **`PASSWORD_ARGON2_DEFAULT_THREADS`**.

  **Aviso**

  Disponível somente quando o PHP usa a libargon2, e não com a implementação libsodium.

### Parâmetros

`password`
:   A senha do usuário.

    **Cuidado**

    Usando **`PASSWORD_BCRYPT`** como
    algoritmo, resultará
    no parâmetro `password` sendo truncado em um
    comprimento máximo de 72 bytes.

`algo`
:   Uma [constante de algoritmo de senha](password.constants.md) denotando o algoritmo a ser usado ao fazer o hash da senha.

`options`
:   Um array associativo contendo opções. Consulte as [constantes de algoritmo de senha](password.constants.md) para obter a documentação sobre as opções suportadas por cada algoritmo.

### Valor Retornado

Retorna o hash da senha.

O algoritmo, o custo e o salt utilizados são retornados como parte do hash. Dessa forma,
toda informação necessária para verificar o hash é incluída nele. Isso permite
que a função [password\_verify()](function.password-verify.md) verifique o hash sem precisar
de um armazenamento separado para a informação do salt ou do algoritmo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O valor padrão da opção `cost` do algoritmo **`PASSWORD_BCRYPT`** foi aumentado de `10` para `12`. |
| 8.3.0 | **password\_hash()** agora define a exceção [Random\RandomException](class.random-randomexception.md) subjacente como a [Exception::$previous](class.exception.md#exception.props.previous) quando uma exceção [ValueError](class.valueerror.md) é lançada devido a uma falha na geração do salt. |
| 8.0.0 | **password\_hash()** não mais retorna **`false`** em caso de falha, em vez disso uma exceção [ValueError](class.valueerror.md) será lançada se o algoritmo de hash da senha não for válido, ou uma exceção [Error](class.error.md) se o cálculo do hash falhou por motivo desconhecido. |
| 8.0.0 | O parâmetros `algo` agora pode ser nulo. |
| 7.4.0 | O parâmetro `algo` agora espera uma [string](language.types.string.md), mas ainda aceita [int](language.types.integer.md)s para compatibilidade com versões anteriores. |
| 7.4.0 | A extensão sodium fornece uma implementação alternativa para senhas Argon2. |
| 7.3.0 | Suporte para senhas Argon2id usando **`PASSWORD_ARGON2ID`** foi adicionado. |
| 7.2.0 | Suporte para senhas Argon2i usando **`PASSWORD_ARGON2I`** foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **password\_hash()****

```
<?php
echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
$2y$12$4Umg0rCJwMswRw/l.SwHvuQV01coP0eWmGzd61QH2RvAOMANUBGC.
```

**Exemplo #2 Exemplo de configuração do custo de **password\_hash()** manualmente**

```
<?php
$options = [
    // Aumenta o custo bcrypt de 12 para 13.
    'cost' => 13,
];
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
$2y$13$xeDfQumlmdm0Sco.4qmH1OGfUUmOcuRmfae0dPJhjX1Bq0yYhqbNi
```

**Exemplo #3 Exemplo de busca de um bom custo para **password\_hash()****

Este código fará um benchmark da máquina para determinar o quão alto um custo pode ser usado
sem deteriorar a experiência do usuário. É recomendado definir o custo mais alto
que não desacelere outras operações que a máquina precisa executar. 11 é uma
boa linha de base, e mais é melhor se a máquina for rápida o suficiente. O código abaixo
visa um tempo de alongamento ≤ 350 milissegundos, que é um atraso apropriado para
sistemas que lidam com logins interativos.

```
<?php
$timeTarget = 0.350; // 350 milissegundos

$cost = 11;
do {
    $cost++;
    $start = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
    $end = microtime(true);
} while (($end - $start) < $timeTarget);

echo "Custo Apropriado Encontrado: " . $cost - 1;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Custo Apropriado Encontrado: 13
```

**Exemplo #4 Exemplo de **password\_hash()** usando Argon2i**

```
<?php
echo 'Argon2i hash: ' . password_hash('rasmuslerdorf', PASSWORD_ARGON2I);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Argon2i hash: $argon2i$v=19$m=1024,t=2,p=2$YzJBSzV4TUhkMzc3d3laeg$zqU/1IN0/AogfP4cmSJI1vc8lpXRW9/S0sYY2i2jHT0
```

### Notas

**Cuidado**

É fortemente recomendado não fornecer um salt explícito para esta função.
Ela criará um salt seguro automaticamente se um não for especificado.

Como apontado acima, fornecer a opção `salt` no PHP 7.0.0
gerará um alerta de descontinuação. O suporte para fornecer um salt explicitamente
foi removido no PHP 8.0.

> **Nota**:
>
> É recomendado testar esta função na máquina usada, ajustando o parâmetro custo
> para que a execução da função leve menos do que 350 milissegundos em sistemas interativos.
> O script do exemplo acima ajudará a escolher um custo bcrypt apropriado para uma determinada
> máquina.

> **Nota**:
>
> Atualizações dos algoritmos suportados por esta função (ou alterações no algoritmo padrão) precisam seguir
> as seguintes regras:
>
> - Qualquer novo algoritmo precisa estar no core por pelo menos 1 versão completa do PHP
>   antes de se tornar padrão. Assim se, por exemplo, um novo algoritmo for adicionado
>   na versão 7.5.5, ela não seria elegível para padrão até a versão 7.7 (uma vez que a 7.6
>   seria a primeira versão completa). Mas se um algoritmo diferente for adicionado
>   na versão 7.6.0, ela seria elegível para padrão na 7.7.0.
> - O padrão deve mudar apenas em uma versão completa (7.3.0, 8.0.8 etc.)
>   e não em uma versão de revisão. A única exceção seria uma
>   emergênca caso uma falha de segurança crítica fosse encontrada no padrão
>   atual.

### Veja também

- [password\_verify()](function.password-verify.md) - Verifica se uma senha corresponde a um hash
- [password\_needs\_rehash()](function.password-needs-rehash.md) - Verifica se o hash informado corresponde às opções especificadas
- [crypt()](function.crypt.md) - Hash unidirecional de string
- [sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md) - Obtém um hash codificado em ASCII

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

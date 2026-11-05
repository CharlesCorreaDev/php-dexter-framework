# 📘 Guia Definitivo de PDO para Desenvolvedores e Agentes de IA

## 1. Introdução: O Que é o PDO e Por Que Ele é o Padrão Ouro
O PDO é uma extensão do PHP que fornece uma interface leve e consistente para acessar bancos de dados. Diferente de extensões específicas (como `mysqli`), o PDO oferece uma camada de abstração. Isso significa que você escreve a lógica de acesso a dados uma vez e pode trocar o motor de banco (de MySQL para Firebird ou SQL Server, por exemplo) com alterações mínimas no código.

Para um agente de IA, a regra é clara: nunca concatene strings para formar queries. Sempre use PDO com *prepared statements*. Isso garante segurança contra SQL Injection e permite que o banco de dados otimize o plano de execução da query, reutilizando o cache.

## 2. Instalação e Configuração (Retrocompatibilidade 7.4 a 8.5)
A boa tradição do PHP brilha aqui: a sintaxe do PDO permanece estável. Para usá-lo, as extensões devem estar habilitadas no `php.ini`.

```ini
; Habilita o núcleo do PDO
extension=pdo

; Habilita os drivers específicos que você usa
extension=pdo_mysql
extension=pdo_sqlsrv
extension=pdo_firebird
extension=pdo_pgsql
```
*Dica de mentor*: No PHP 8.0+, você pode usar argumentos nomeados em várias funções, mas os métodos do PDO (`prepare`, `execute`, `fetch`) mantiveram sua assinatura clássica, garantindo que seu código legado de 7.4 funcione perfeitamente no 8.5 sem refatoração.

## 3. A Conexão: Dominando a DSN (Data Source Name)
A DSN é a string que diz ao PDO onde e como conectar. Cada driver tem sua sintaxe. Veja os exemplos práticos para o seu stack:

```php
// MySQL / MariaDB (sempre defina o charset para utf8mb4)
$dsn = 'mysql:host=localhost;dbname=meu_banco;charset=utf8mb4';

// SQL Server (Microsoft)
$dsn = 'sqlsrv:Server=localhost,1433;Database=meu_banco;Encrypt=yes';

// Firebird (2.0 a 5.0)
$dsn = 'firebird:dbname=localhost:C:/dados/meu_banco.fdb;charset=UTF8';

// PostgreSQL
$dsn = 'pgsql:host=localhost;port=5432;dbname=meu_banco;';
```

## 4. Instanciando com Segurança: Atributos Essenciais
Nunca crie uma instância do PDO sem definir os atributos de segurança. Um agente de IA deve sempre gerar o código de conexão desta forma:

```php
try {
    $pdo = new PDO($dsn, 'usuario', 'senha', [
        // Lança exceções em caso de erro (obrigatório para tratamento moderno)
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        
        // Retorna os resultados como array associativo por padrão
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        
        // Desativa a emulação de prepared statements. 
        // Isso força o uso real de parâmetros pelo driver do banco, blindando contra SQL Injection.
        PDO::ATTR_EMULATE_PREPARES => false,
        
        // Opcional, mas recomendado: desativa a persistência de conexão se não usar pool externo
        PDO::ATTR_PERSISTENT => false
    ]);
} catch (PDOException $e) {
    // Em produção, nunca exponha $e->getMessage() diretamente ao usuário final.
    // Logue o erro e mostre uma mensagem genérica.
    error_log("Falha na conexão: " . $e->getMessage());
    die("Erro ao conectar ao banco de dados.");
}
```

## 5. O Ciclo de Vida de uma Query Segura
Esqueça o método `$pdo->query()` para dados dinâmicos. O caminho correto e profissional segue quatro passos:

1. **Prepare**: O banco analisa e compila a estrutura da query.
2. **Bind**: Os valores são vinculados aos espaços reservados (`?` ou `:nome`).
3. **Execute**: A query é executada com os valores reais.
4. **Fetch**: Os dados são recuperados.

```php
// 1. Prepare (usando parâmetros nomeados, que são mais legíveis que '?')
$sql = "SELECT id, nome, email FROM usuarios WHERE status = :status AND idade >= :idade";
$stmt = $pdo->prepare($sql);

// 2. e 3. Bind e Execute (passando um array associativo)
$params = [
    'status' => 'ativo',
    'idade' => 18
];
$stmt->execute($params);

// 4. Fetch
$usuarios = $stmt->fetchAll();
```

## 6. Modos de Fetch: Moldando os Dados para Sua Necessidade
O PDO é flexível. Ele pode entregar os dados no formato que sua arquitetura exigir.

*   `PDO::FETCH_ASSOC`: Array associativo (índices são nomes de colunas). O mais comum e leve.
*   `PDO::FETCH_OBJ`: Objeto `stdClass`. Útil para acesso via `$row->nome`.
*   `PDO::FETCH_CLASS`: O pulo do gato futurista. Injeta os dados diretamente em uma classe PHP existente. Perfeito para Domain-Driven Design (DDD).

```php
// Exemplo de FETCH_CLASS
class Usuario {
    public int $id;
    public string $nome;
    public string $email;
    
    public function getResumo(): string {
        return "{$this->nome} ({$this->email})";
    }
}

$stmt->setFetchMode(PDO::FETCH_CLASS, Usuario::class);
$usuarios = $stmt->fetchAll();

// Agora $usuarios é um array de objetos Usuario, prontos para uso no PHP 8.5
echo $usuarios[0]->getResumo();
```

## 7. Tratamento de Erros e Transações (DCL e DTL na Prática)
Operações que modificam dados (INSERT, UPDATE, DELETE) devem ser atômicas. O PDO facilita isso com métodos nativos de transação.

```php
try {
    // Inicia a transação (DTL)
    $pdo->beginTransaction();

    $stmt1 = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :origem");
    $stmt1->execute(['valor' => 100, 'origem' => 1]);

    $stmt2 = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :destino");
    $stmt2->execute(['valor' => 100, 'destino' => 2]);

    // Se chegou aqui sem exceções, confirma as alterações
    $pdo->commit();
    echo "Transferência realizada com sucesso.";

} catch (PDOException $e) {
    // Se qualquer coisa falhar, desfaz tudo. O banco volta ao estado anterior.
    $pdo->rollBack();
    error_log("Erro na transação: " . $e->getMessage());
    echo "Falha ao processar a operação.";
}
```

## 8. Perguntas Socráticas para o Agente (ou para Você)
Antes de gerar ou revisar um código PDO, faça estas perguntas:
1. **Estou usando `prepare` e `execute`?** Se a resposta for não, o código é vulnerável e ineficiente.
2. **O `ATTR_EMULATE_PREPARES` está como `false`?** Se estiver como `true`, o PHP está simulando a preparação, o que anula parte da segurança e performance nativa do banco (especialmente crítico no MySQL).
3. **Estou tratando exceções?** Um `PDOException` não tratado pode expor credenciais do banco em tela. Sempre use `try/catch`.
4. **Preciso de todos os registros?** Se for apenas um, use `$stmt->fetch()` em vez de `fetchAll()`. Economize memória RAM.

## 9. Nuances por Driver no PDO
*   **MySQL**: O driver `pdo_mysql` é maduro. Use sempre `charset=utf8mb4` na DSN para suportar emojis e caracteres especiais corretamente.
*   **SQL Server**: O driver `pdo_sqlsrv` da Microsoft é o recomendado (evite o antigo `dblib` no Linux se possível, prefira o driver oficial da MS). Lembre-se que o SQL Server usa `?` ou `:nome` para parâmetros, mas a ordem pode ser estrita em versões mais antigas.
*   **Firebird**: O driver `pdo_firebird` funciona muito bem, mas atenção ao caminho do banco na DSN. No Windows, use barras normais ou duplas barras invertidas. O Firebird 3.0 e 4.0+ lidam perfeitamente com `utf8`.
*   **Last Insert ID**: Após um INSERT, use `$pdo->lastInsertId()`. No PostgreSQL, pode ser necessário passar o nome da sequência: `$pdo->lastInsertId('tabela_id_seq')`.

---

## 10. Conclusão
Dominar o PDO é o que separa um script amador de uma aplicação profissional, escalável e segura. Seja para alimentar um dashboard no Umami Analytics, sincronizar contatos via Evolution API ou gerenciar regras de negócio complexas no seu backend PHP, o PDO é a fundação.

Mantenha o código limpo, use parâmetros nomeados para legibilidade, abrace o `FETCH_CLASS` para integrar com orientação a objetos moderna e nunca, jamais, confie em dados vindos do usuário sem prepará-los. 
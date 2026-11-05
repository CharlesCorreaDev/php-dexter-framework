# Patterns & Architecture / Padrões e Arquitetura - PHP Developer Expert

## 🏛️ Padrões de Arquitetura Modernos em PHP

### 1. Model-View-Controller (MVC)
O padrão tradicional adotado pela maioria dos frameworks (Laravel, Symfony).
- **Model**: Lida com lógica de negócios e estado (banco de dados).
- **View**: Apresentação (geralmente gerada via Twig, Blade ou JSON).
- **Controller**: Coordena o input do usuário e a resposta, mas não deve conter regras de negócio complexas ("Fat Model, Skinny Controller").
- **Guia Completo e Modular de MVC**: Consulte a documentação detalhada em [`MVC/README.md`](MVC/README.md) cobrindo Front Controller, Router PSR, Container DI, DTOs, Services, Repositories com PDO, Views seguras (anti-XSS/CSRF) e comparativo do PHP 7.4 ao 8.5.

### 2. Action-Domain-Responder (ADR)
Refinamento do MVC projetado especificamente para requisições web.
- **Action**: Recebe a requisição (uma action por rota), aciona o domínio.
- **Domain**: Processa a regra de negócios.
- **Responder**: Formata a saída (ex: transforma um objeto de domínio em JSON ou HTML).

### 3. Repository Pattern
Separa a lógica de abstração de dados da lógica de negócios.
- Em vez de chamar `User::where('status', 'active')->get()` diretamente no controller, injeta-se um `UserRepository` com o método `findActiveUsers()`.
- Facilita testes (Mocking) e possível troca de ORM/Banco de dados.

### 4. Factory Pattern
Centraliza a criação de objetos complexos.
- Evita instanciar objetos cheios de dependências em todo o código usando a palavra-chave `new`.
- Comum em implementações de injeção de dependência e containers.

### 5. SOLID (Aplicação Prática no PHP)
- **S**ingle Responsibility: Uma classe, uma responsabilidade.
- **O**pen/Closed: Aberto para extensão, fechado para modificação (use interfaces e abstrações).
- **L**iskov Substitution: Classes derivadas devem poder substituir a base sem quebrar o código. (Cuidado com retornos inconsistentes).
- **I**nterface Segregation: Interfaces pequenas e específicas (Ex: `LoggerInterface` ao invés de uma `AppInterface` gigantesca).
- **D**ependency Inversion: Dependa de abstrações (Interfaces), não de implementações concretas (classes). Use Injeção de Dependência no construtor.

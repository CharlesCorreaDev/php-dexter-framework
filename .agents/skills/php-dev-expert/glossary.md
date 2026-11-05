# Glossary / Glossário - PHP Developer Expert

## 📖 Dicionário de Termos Técnicos

- **JIT (Just-In-Time Compiler)**: Introduzido no PHP 8.0. Compila partes do código PHP em código de máquina em tempo de execução para melhoria significativa de performance em tarefas intensivas de CPU.
- **OPcache**: Extensão embutida que melhora a performance do PHP armazenando o bytecode pré-compilado na memória compartilhada, eliminando a necessidade do PHP carregar e analisar os scripts em cada requisição.
- **PDO (PHP Data Objects)**: Interface consistente para acessar bancos de dados no PHP. Fornece uma camada de abstração de acesso a dados.
- **PSR (PHP Standard Recommendations)**: Conjunto de recomendações emitidas pelo PHP-FIG (Framework Interop Group) para padronizar conceitos comuns como Autoloading (PSR-4), Interfaces HTTP (PSR-7), e Log (PSR-3).
- **Type Hinting**: Declaração explícita do tipo de dados que uma variável, parâmetro ou valor de retorno deve ter. Fundamental para a evolução do PHP de linguagem fracamente tipada para tipagem forte opcional nas versões recentes.
- **Union Types**: Recurso do PHP 8.0 que permite especificar múltiplos tipos para uma única variável (ex: `int|float`).
- **Composer**: Gerenciador de dependências padrão do ecossistema PHP.
- **Xdebug**: Extensão essencial para debugging e profiling em PHP, permitindo a execução do código passo a passo.
- **Strict Types**: Diretiva (`declare(strict_types=1);`) que impõe tipagem rigorosa no arquivo onde é declarada, lançando exceção (`TypeError`) se um tipo incompatível for passado para uma função ou método.
- **PHP2Shell (`CVE-2026-109618` e `CVE-2026-109619`)**: Par de vulnerabilidades críticas de RCE não autenticado no core do PHP (afetando versões 5.4 a 8.5.11), descobertas em agosto de 2026 por pesquisadores da Calif e Wiz em parceria com a OpenAI usando auditoria assistida por IA. O `CVE-2026-109618` decorre de corrupção de memória durante `longjmp()` (`zend_bailout`) em erros de falta de memória (OOM) com estruturas parcialmente inicializadas, enquanto o `CVE-2026-109619` é um *Use-After-Free* (UAF) causado por ponteiros globais obsoletos (*stale state*, como em `session.upload_progress`) reutilizados por workers persistentes (PHP-FPM / `mod_php`).

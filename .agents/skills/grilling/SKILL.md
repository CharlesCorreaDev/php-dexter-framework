---
name: grilling
description: Protocolo aprofundado de questionamento técnico e teste de hipóteses sobre decisões de arquitetura e código.
---

# Skill: Grilling Técnico 🔥

## Aplicação
Quando uma decisão tiver alto impacto (ex: driver de cache padrão, motor de filas, arquitetura de multiconexão do `Database-Manager.php`), este protocolo deve desafiar:
- *O que acontece sob falha de rede ou timeout?*
- *Como é feito o fallback?*
- *Qual o impacto em memória e concorrência?*
- *Existe complexidade desnecessária violando o princípio YAGNI ou DRY?*


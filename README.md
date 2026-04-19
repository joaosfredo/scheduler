# 📅 Scheduler

> Sistema de agendamento de aulas desenvolvido como Trabalho de Conclusão de Curso do curso técnico em informática.

---

## 📌 Sobre o Projeto

O **Scheduler** é uma aplicação web para gerenciamento e agendamento de aulas, com diferentes níveis de acesso para **alunos**, **professores** e **gerentes**. O sistema permite que alunos realizem agendamentos, professores gerenciem suas disponibilidades e gerentes supervisionem toda a operação da plataforma.

---

## 🖥️ Screenshots

### Página Inicial
<img width="1916" alt="Página inicial" src="https://github.com/user-attachments/assets/9a70c9a3-13f7-4d29-a1f2-778f05fc2608" />

---

### 👨‍🎓 Área do Aluno

<img width="1919" alt="Área do aluno - visão geral" src="https://github.com/user-attachments/assets/6fe1016a-2518-4854-8e0b-0f43ed48b900" />

<img width="1919" alt="Área do aluno - agendamento" src="https://github.com/user-attachments/assets/c00c8d36-8a19-4f94-9342-2aefbc66cad9" />

<img width="1919" alt="Área do aluno - histórico" src="https://github.com/user-attachments/assets/6a817dde-6257-4016-9c0f-af2f9b1cf26c" />

---

### 👨‍🏫 Área do Professor

<img width="1919" alt="Área do professor - visão geral" src="https://github.com/user-attachments/assets/dd5651a4-9a46-461a-81e2-ec81a6754435" />

<img width="1917" alt="Área do professor - agenda" src="https://github.com/user-attachments/assets/7d1186f0-d7d9-45fc-89c9-708efa354b25" />

<img width="1919" alt="Área do professor - detalhes" src="https://github.com/user-attachments/assets/cb9151e4-d3cf-430d-b51a-de6fd512f92a" />

---

### 🧑‍💼 Área do Gerente

<img width="1919" alt="Área do gerente - visão geral" src="https://github.com/user-attachments/assets/27f1a60b-3c0c-4dc1-9e7a-f2577f1e97bb" />

<img width="1919" alt="Área do gerente - relatórios" src="https://github.com/user-attachments/assets/7404034e-9cf2-4897-884b-a763ad2b0ca2" />

<img width="1919" alt="Área do gerente - gestão" src="https://github.com/user-attachments/assets/20f6c955-3b2c-4111-83cd-278edbf20b8e" />

<img width="985" alt="Área do gerente - painel" src="https://github.com/user-attachments/assets/b45d5141-e66c-4370-aa25-d6909f22626d" />

---

## 🚀 Tecnologias Utilizadas

| Tecnologia | Uso |
|---|---|
| **PHP** | Back-end e lógica de negócio |
| **HTML / CSS / SCSS** | Estrutura e estilização das views |
| **JavaScript** | Interatividade no front-end |
| **Smarty** | Template engine para as views |
| **PHPMailer** | Envio de e-mails |
| **Composer** | Gerenciamento de dependências |

---

## 🏗️ Arquitetura

O projeto segue o padrão **MVC (Model-View-Controller)**:

```
scheduler/
├── controller/     # Controladores da aplicação
├── model/          # Modelos e regras de negócio
├── views/          # Templates Smarty (front-end)
├── lib/            # Dependências gerenciadas pelo Composer
├── users/          # Lógica relacionada aos tipos de usuário
├── index.php       # Ponto de entrada da aplicação
├── erro.php        # Página de erro
├── .htaccess       # Configurações do servidor Apache
└── composer.json   # Dependências do projeto
```

---

## 👥 Perfis de Usuário

- **Aluno** — Visualização de conteúdos e cronogramas, acompanhamento das atividades e realização de exercícios separados por matérias
- **Professor** — Gerencia sua agenda, confirma e cancela agendamentos.
- **Gerente** — Tem visão completa do sistema, gerencia usuários e acompanha relatórios.

---

## ⚙️ Pré-requisitos

- PHP >= 7.x
- Apache com `mod_rewrite` habilitado
- Composer
- Banco de dados MySQL

---

## 🔧 Instalação e Configuração

1. **Clone o repositório:**

```bash
git clone https://github.com/joaosfredo/scheduler.git
cd scheduler
```

2. **Instale as dependências com o Composer:**

```bash
composer install
```

3. **Configure o banco de dados:**

   - Crie um banco de dados MySQL.
   - Importe o arquivo `.sql` de configuração.
   - Atualize as credenciais de conexão no arquivo de configuração do projeto.

4. **Configure o servidor:**

   - Certifique-se de que o Apache tem `mod_rewrite` ativado.
   - O arquivo `.htaccess` já está configurado para o roteamento da aplicação.

5. **Acesse a aplicação:**

```
http://localhost/scheduler
```

---

## 📦 Dependências

| Pacote | Versão | Descrição |
|---|---|---|
| `smarty/smarty` | ~3.1 | Template engine PHP |
| `phpmailer/phpmailer` | ~5.2 | Biblioteca para envio de e-mails |

---

## 📄 Licença

Este projeto foi desenvolvido para fins acadêmicos como Trabalho de Conclusão de Curso do curso técnico em informática.

---

## 👤 Autor

**João Victor Sfredo**

[![GitHub](https://img.shields.io/badge/GitHub-joaosfredo-181717?style=flat&logo=github)](https://github.com/joaosfredo)

# 🧾 Gerador de QR Code com PHP e Bootstrap

Este é um projeto simples de geração de QR Codes desenvolvido em PHP com a biblioteca [endroid/qr-code](https://github.com/endroid/qr-code), utilizando o ambiente de desenvolvimento local [Laragon](https://laragon.org/) e estilização com [Bootstrap 5](https://getbootstrap.com/).

---

## 🚀 Funcionalidades

- Inserção de texto ou link via formulário
- Geração automática de QR Code em PNG
- Visualização do QR Code na tela
- Botão para download da imagem gerada
- Interface responsiva com Bootstrap 5

---

## 📦 Tecnologias e Ferramentas

- PHP 8.1+
- Composer
- Bootstrap 5
- Biblioteca [`endroid/qr-code` v4.4](https://github.com/endroid/qr-code/tree/4.4.0)
- Laragon como ambiente local

---

## 🛠 Instalação e uso

1. Clone ou copie o projeto para a pasta `www` do Laragon:


2. Abra o terminal no diretório do projeto e execute:
```bash
 composer require endroid/qr-code:^4.4
```

## 📁 Estrutura de arquivos
```plaintext
meuqrcode/
│
├── index.php           # Formulário principal
├── gerar.php           # Lógica para gerar e salvar o QR Code
├── qrcodes/            # Pasta onde os QR Codes gerados são armazenados
├── vendor/             # Dependências gerenciadas via Composer
├── composer.json       # Declaração de dependências
├── composer.lock       # Versões exatas instaladas
└── README.md           # Documentação do projeto
```

## 👨‍💻 Autor

- Cristian Ricardo Fontinele e Silva
- 📦 Versão: 0.1

document.getElementById("cnpj").addEventListener("input", function() {
          let cnpj = this.value;
          cnpj = cnpj.replace(/\D/g, "");
          cnpj = cnpj.replace(/(\d{2})(\d)/, "$1.$2");
          cnpj = cnpj.replace(/(\d{3})(\d)/, "$1.$2");
          cnpj = cnpj.replace(/(\d{3})(\d)/, "$1/$2");
          cnpj = cnpj.replace(/(\d{4})(\d)/, "$1-$2");
          this.value = cnpj;
      });
      
      document.getElementById("telefone").addEventListener("input", function() {
          let telefone = this.value;
          telefone = telefone.replace(/\D/g, "");
          telefone = telefone.replace(/^(\d{2})(\d)/g, "($1) $2");
          telefone = telefone.replace(/(\d)(\d{4})$/, "$1-$2");
          this.value = telefone;
      });
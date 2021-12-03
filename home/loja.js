let jogador1 = {
    valor: undefined,
    tentativa: 0,
    escolha: function() {
        let sort = Math.floor(Math.random() * 3);
        if (sort == 0) {
            this.valor = '0';
        } else {
            if (sort == 1) {
                this.valor = '1';
            } else {
                this.valor = '2';
            }
        }
        //console.log(this.valor);
        ganhou.vencedor(); //trocar
    },
}

let ganhou = {
    vencedor: function() {
        jogador1.tentativa = jogador1.tentativa + 1;
        console.log(jogador1.tentativa);
        if (jogador1.tentativa == 1) {
            console.log(jogador1.tentativa);
            if (jogador1.valor == '0') {
                document.getElementById('vitoriasJog1').innerText = `você ganhou o quadrinho Nº1`;
            } else {
                if (jogador1.valor == '1') {
                    document.getElementById('vitoriasJog1').innerText = `você ganhou o quadrinho Nº2`;
                } else {
                    document.getElementById('vitoriasJog1').innerText = `você ganhou o quadrinho Nº3`;
                }
            }
        } else {
            document.getElementById('verif').innerText = `Você não pode jogar mais de 1 vez, sorry`;
        }
    },
}
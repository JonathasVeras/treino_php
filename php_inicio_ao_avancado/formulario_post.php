<form name="cadastro" action="processa.php" method="POST" accept-charset='UTF-8'>
<label>Nome:</label>
 <input type="text" name="nome" size="30" placeholder="Digite seu nome aqui" autofocus /><br>
<label>Sobrenome:</label>
 <input type="text" name="sobrenome" size="50 placeholder="Digite seu sobrenome aqui"/><br>
<br>
<label>Senha:</label>
 <input type="password" name="senha" size=15 required><br>
<br>
Sexo: <br/>
 <input type="radio" name="sexo" value="M"> Masculino<br>
 <input type="radio" name="sexo" value="F"> Feminino<br>
 <input type="radio" name="sexo" value="N"> Não Declarado<br>
 <br/>
 Marque as opções de seu interesse:<br/>
 <input type="checkbox" name="linguagens[]" value="ASP"> ASP.NET<br>
 <input type="checkbox" name="linguagens[]" value="JavaScript"> Javascript<br>
 <input type="checkbox" name="linguagens[]" value="PHP"> PHP<br>
 <input type="checkbox" name="linguagens[]" value="Python"> Python<br>
<br/>
Entre com seus comentários na caixa a seguir:<br>
<textarea rows="8" cols="50" name="comentarios"></textarea><br>

Selecione as tecnologias que deseja aprender: (Segure a tecla Ctrl para selecionar mais de uma tecnologia)<br/>
 <select name="tecnologias[]" multiple>
   <option value="ASP">ASP.NET</option>
   <option value="C" selected>Linguagem C</option>
   <option value="C++">C++</option>
   <option value="Java">Java</option>
   <option value="PHP">PHP</option>
   <option value="Python">Python</option>
   <option value="Ruby">Ruby</option>
 </select><br>
 <br>
Selecione um arquivo de seu computador para upload:<br>
 <input type="file" name="arquivo"/><br>
<br>
 <input type="submit" name="submit" value="Enviar" /><br>
 <input type="reset" name="reset" value="Resetar" /><br>
</form>
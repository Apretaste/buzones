<p>La siguiente es la lista de emails a los cuales usted puede escribir para interactuar con Apretaste.</p>
<ul>
	{foreach from=$emails item=email}
		<li>{$email->email}</li>
	{/foreach}
</ul>
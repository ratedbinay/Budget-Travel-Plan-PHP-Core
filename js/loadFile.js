function loadExternalfile() {
	console.log("iam here");
return
	var shell = new ActiveXObject("WScript.Shell");
shell.run("python rategenerator.py");

return

	 $.ajax({
      type:'get',
      url:'rategenerator.py',
      cache:false,
      async:'asynchronous',
      dataType:'json',
      success: function(data) {
        console.log(JSON.stringify(data))
      },
      error: function(request, status, error) {
        console.log("Error: " + error)
      }
   });

	 return

	$.ajax({
              url: "rategenerator.py",
             context: document.body
            }).done(function() {
             alert('finished python script');;
            });
            return
	var pathToFIle = "C:/xampp/htdocs/budget2/rategenerator.py"
	var make_shell_ready = escapeShellcmd(pathToFIle);
	return shell_exec(make_shell_ready);
}
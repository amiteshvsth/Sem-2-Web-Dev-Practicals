<iframe id="frmFile" src="test.txt" onload="LoadFile();" style="display: none;"></iframe>
<script type="text/javascript">
    function LoadFile() {
        var oFrame = document.getElementById("frmFile");
        var strRawContents = oFrame.contentWindow.document.body.childNodes[0].innerHTML;
        while (strRawContents.indexOf("\r") >= 0)
            strRawContents = strRawContents.replace("\r", "");
        var arrLines = strRawContents.split("\n");
        for (var i = 0; i < arrLines.length; i++) {
            var curLine = arrLines[i];
            document.write(curLine+"<br>");
        }
    }
    </script>
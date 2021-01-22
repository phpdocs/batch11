<?php
    if(isset($_REQUEST['content'])){
        $content=$_REQUEST['content'];
        if($content==0){
            echo "<h1>Content 0</h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae tempore quos adipisci aliquam voluptates dolorem repellendus, quidem modi reiciendis laboriosam illo incidunt? Dignissimos, ducimus repudiandae. Obcaecati recusandae consequatur distinctio?";
        }else if($content==1){
            echo "<h1>Content 1</h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae tempore quos adipisci aliquam voluptates dolorem repellendus, quidem modi reiciendis laboriosam illo incidunt? Dignissimos, ducimus repudiandae. Obcaecati recusandae consequatur distinctio?";
        }else if ($content==2){
            echo "<h1>Content 2</h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae tempore quos adipisci aliquam voluptates dolorem repellendus, quidem modi reiciendis laboriosam illo incidunt? Dignissimos, ducimus repudiandae. Obcaecati recusandae consequatur distinctio?";
        }else{
            echo "No Content Found";
        }
    }
    
?>
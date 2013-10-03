			</div>
		</div>>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		<?php if(is_array($site['js'])) foreach($site['js'] as $file): ?>
            <script src="js/<?= $file ?>"></script>
        <?php endforeach; ?>
	</body>
</html>

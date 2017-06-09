<?php 
	include_once 'class.connection.php';

	/**
	* 
	*/
	class Article extends Connection
	{
		public function create($title, $content, $author, $created_at, $updated_at)
		{
			$result 	= $this->db->query(
				"INSERT INTO articles(title, content, author, created_at, updated_at)
				VALUES('{$title}', '{$content}', '{$author}', '{$created_at}', '{$updated_at}')");
		}

		public function create_multi($titlem, $contentm, $authorm, $created_at, $updated_at)
		{
			$result 	= $this->db->query(
				"INSERT INTO articles(title, content, author, created_at, updated_at)
				VALUES('{$titlem}', '{$contentm}', '{$authorm}', '{$created_at}', '{$updated_at}')");
		}

		public function update($title, $content, $author, $updated_at, $id)
		{
			$result 	= $this->db->query(
				"UPDATE articles SET title='{$title}', content='{$content}', author='{$author}', updated_at='{$updated_at}' WHERE id='{$id}'"
				);
		}

		public function delete($id)
		{
			$result 	= $this->db->query("DELETE FROM articles WHERE id='{$id}'");
		}
	}
?>
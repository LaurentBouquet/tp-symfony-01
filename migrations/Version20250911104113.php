<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250911104113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player_game (player_id INT NOT NULL, game_id INT NOT NULL, INDEX IDX_813161BF99E6F5DF (player_id), INDEX IDX_813161BFE48FD905 (game_id), PRIMARY KEY(player_id, game_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE player_game ADD CONSTRAINT FK_813161BF99E6F5DF FOREIGN KEY (player_id) REFERENCES tbl_players (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE player_game ADD CONSTRAINT FK_813161BFE48FD905 FOREIGN KEY (game_id) REFERENCES tbl_games (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player_game DROP FOREIGN KEY FK_813161BF99E6F5DF');
        $this->addSql('ALTER TABLE player_game DROP FOREIGN KEY FK_813161BFE48FD905');
        $this->addSql('DROP TABLE player_game');
    }
}

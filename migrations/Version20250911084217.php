<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250911084217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player_group (player_id INT NOT NULL, group_id INT NOT NULL, INDEX IDX_D2B23F8399E6F5DF (player_id), INDEX IDX_D2B23F83FE54D947 (group_id), PRIMARY KEY(player_id, group_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE player_group ADD CONSTRAINT FK_D2B23F8399E6F5DF FOREIGN KEY (player_id) REFERENCES tbl_players (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE player_group ADD CONSTRAINT FK_D2B23F83FE54D947 FOREIGN KEY (group_id) REFERENCES tbl_groups (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player_group DROP FOREIGN KEY FK_D2B23F8399E6F5DF');
        $this->addSql('ALTER TABLE player_group DROP FOREIGN KEY FK_D2B23F83FE54D947');
        $this->addSql('DROP TABLE player_group');
    }
}

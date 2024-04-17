-- users' tables must be created via ion_auth

CREATE TABLE questions (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,

    title VARCHAR(255) NOT NULL,
    description MEDIUMTEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    user_id bigint(20) UNSIGNED NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
    -- FOREIGN KEY REFERENCES users (id) ON DELETE CASCADE
);

CREATE TABLE answers (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,

    text MEDIUMTEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    -- user_id INT NOT NULL FOREIGN KEY REFERENCES users (id) ON DELETE CASCADE,
    -- question_id INT NOT NULL FOREIGN KEY REFERENCES questions (id) ON DELETE CASCADE,
    user_id bigint(20) UNSIGNED NOT NULL,
    question_id INT NOT NULL,

    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE,
    FOREIGN KEY (question_id) REFERENCES questions (id) ON DELETE CASCADE
);
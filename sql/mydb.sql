CREATE TABLE player (
	name varchar(128),
	faction varchar(16),
	army varchar(256),
	victory_points int
);

CREATE TABLE gamesPlayed (
	timeStarted date,
	timeEnded date
);

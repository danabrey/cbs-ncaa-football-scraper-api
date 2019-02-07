# CBS NCAA Football Player Scraper API

Provides an API for accessing college football player stats from CBS in JSON format.

## Usage

Currently only provides one route:

`/player/{id}` where _id_ is the CBS id of the player. Returns a JSON representation of that player's statistics by season, e.g.:

`GET /player/2241251`:

```$json
  "id": 2241251,
  "name": "Devin Singletary",
  "seasons": {
    "2016": {
      "year": 2016,
      "team": "Florida Atlantic",
      "gamesPlayed": 12,
      "rushingAttempts": 152,
      "rushingYards": 1021,
      "rushingTouchdowns": 12,
      "receptions": 26,
      "receivingYards": 163,
      "receivingTouchdowns": 0,
      "puntReturns": 0,
      "puntReturnYards": 0,
      "puntReturnTouchdowns": 0,
      "puntReturnLong": 0,
      "kickoffReturns": 13,
      "kickoffReturnYards": 284,
      "kickoffReturnTouchdowns": 0,
      "kickoffReturnLong": 36,
      "fumbles": 0,
      "fumblesLost": 0,
      "passingAttempts": 0,
      "passingCompletions": 0,
      "passingYards": 0,
      "passingInterceptions": 0,
      "passingTouchdowns": 0,
      "sacked": 0,
      "passerRating": "0.0"
    },
    "2017": {
      "year": 2017,
      "team": "Florida Atlantic",
      "gamesPlayed": 14,
      "rushingAttempts": 301,
      "rushingYards": 1920,
      "rushingTouchdowns": 32,
      "receptions": 19,
      "receivingYards": 198,
      "receivingTouchdowns": 1,
      "puntReturns": 0,
      "puntReturnYards": 0,
      "puntReturnTouchdowns": 0,
      "puntReturnLong": 0,
      "kickoffReturns": 0,
      "kickoffReturnYards": 0,
      "kickoffReturnTouchdowns": 0,
      "kickoffReturnLong": 0,
      "fumbles": 4,
      "fumblesLost": 3,
      "passingAttempts": 1,
      "passingCompletions": 1,
      "passingYards": 12,
      "passingInterceptions": 0,
      "passingTouchdowns": 0,
      "sacked": 0,
      "passerRating": "200.8"
    },
    "2018": {
      "year": 2018,
      "team": "Florida Atlantic",
      "gamesPlayed": 12,
      "rushingAttempts": 261,
      "rushingYards": 1348,
      "rushingTouchdowns": 22,
      "receptions": 6,
      "receivingYards": 36,
      "receivingTouchdowns": 0,
      "puntReturns": 0,
      "puntReturnYards": 0,
      "puntReturnTouchdowns": 0,
      "puntReturnLong": 0,
      "kickoffReturns": 0,
      "kickoffReturnYards": 0,
      "kickoffReturnTouchdowns": 0,
      "kickoffReturnLong": 0,
      "fumbles": 1,
      "fumblesLost": 0,
      "passingAttempts": 1,
      "passingCompletions": 1,
      "passingYards": 25,
      "passingInterceptions": 0,
      "passingTouchdowns": 0,
      "sacked": 0,
      "passerRating": "310.0"
    }
  },
  "position": "RB"
}
```

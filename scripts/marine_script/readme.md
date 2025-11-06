# Backup Exercise

## Setup

Execute SQL script (MariaDB): `./db/base.sql`

## Usage

Run: `./script.sh`

Photos will appear in the `pictures` folder and in the database (3 per script execution).
> Photos with "small" in the filename should NOT be saved to the database!

## Cron Job

Add a cron task to run the script every 3 minutes:

```bash
crontab -e
```

Add the following line:

```
*/3 * * * * /path/to/your/script.sh
```

Replace `/path/to/your/` with the actual absolute path to your script.

To verify the cron job is active:
```bash
crontab -l
```

## Requirements

- MariaDB running on `127.0.0.1`
- Database name: `photos_db`
- PHP installed with `mysqli` extension


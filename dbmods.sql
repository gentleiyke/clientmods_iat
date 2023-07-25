--Added a new column
ALTER TABLE user_id 
ADD verify int 
--update column with a default value
UPDATE user_id
SET verify = 0
WHERE paired = 1
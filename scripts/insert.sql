INSERT INTO UserInfo
VALUES(
  1,
  'UserLN',
  'UserFN',
  'UserMN', 
  '2000-01-01', 
  'Manila',
  'Male', 
  'Filipino',
  'Single',
  '11111',
  'user1@gmail.com',
  '9999',
  'Dasmarinas',
  '100',
  'City of Manila'
);

INSERT INTO UserInfo
VALUES(
  2, 
  'Admin',
  'Admin',
  'Admin',
  '2000-01-01',
  'Manila',
  'Male',
  'Filipino',
  'Married', 
  '11111', 
  'admin1@gmail.com', 
  '9999', 
  'Dasmarinas', 
  '100', 
  'City of Manila'
);

INSERT INTO UserCredentials
VALUES (
  1,
  1,
  'user',
  'user',
  'user@gmail.com',
  'active',
  'user'
);

INSERT INTO UserCredentials
VALUES (
  2,
  2,
  'admin',
  'admin',
  'admin@gmail.com',
  'active',
  'admin'
);

/* UserInfo */


INSERT INTO UserHistory
VALUES (
  1,
  1,
  'Test Action',
  'Test Title',
  '2020-01-01',
  '2020-01-01',
  'Monday'
);

INSERT INTO UserHistory
VALUES (
  2,
  2,
  'Test Action',
  'Test Title',
  '2020-01-01',
  '2020-01-01',
  'Monday'
);

INSERT INTO UserQueries
VALUES (
  1,
  1,
  'Example query this is a n example of a very long query which is supposed to be around 65k characters long',
  '2020-01-01',
  '2020-01-01',
  'Monday'
);

INSERT INTO UserQueries
VALUES (
  2,
  2,
  'Example query this is a n example of a very long query which is supposed to be around 65k characters long',
  '2020-01-01',
  '2020-01-01',
  'Monday'
);

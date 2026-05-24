import { TestBed } from '@angular/core/testing';

import { Sesionesservice } from './sesionesservice';

describe('Sesionesservice', () => {
  let service: Sesionesservice;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(Sesionesservice);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});

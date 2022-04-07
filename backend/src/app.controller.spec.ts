import { Test, TestingModule } from '@nestjs/testing';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { EventService } from './events/event.service';
import { EventController } from './events/event.controller';

describe('AppController', () => {
  let appController: AppController;
  let eventService: EventService;
  let eventController: EventController;

  beforeEach(async () => {
    const app: TestingModule = await Test.createTestingModule({
      controllers: [AppController],
      providers: [AppService, EventService, EventController],
    }).compile();

    appController = app.get<AppController>(AppController);
    eventService = app.get<EventService>(EventService);
    eventController = app.get<EventController>(EventController);
  });

  describe('root', () => {
    it('should return "ticket i/O - simple API"', () => {
      expect(appController.getInfo()).toBe('ticket i/O - simple API');
    });
  });

  describe('findAll', () => {
    it('should retrieve the initial event array', async () => {
      const result = [
        { 
          eventId: 'a0914679-03b5-44e9-ba9f-5e38b3331151',  
          eventTitle: 'Bootshaus', 
          eventDate: new Date(), 
          eventCity: 'Cologne', 
          tickets: [
            { barcode: '1', firstName: 'John', lastName: 'Doe' },
            { barcode: '2', firstName: 'Jane', lastName: 'Doe' },
          ] 
        }
      ];

      jest.spyOn(eventService, 'findAll').mockImplementation(() => result);

      expect(await eventController.findAll()).toBe(result);
    })
  })
});
